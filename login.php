<?php session_start(); // allows us to have persistence of our HTTP session

	// check if we already have a session started and make the default name
	// anonymous.

	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
	}

		$servername = "localhost";
		$username = "root";
		$password = "";

		$db_connect = mysqli_connect($servername, $username, $password);

		if (!$db_connect) {
			die("Connection failed: " . mysqli_connect_error());
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!empty($_POST))
			{
		$name = $_POST['username'];
		$formPassword = $_POST['password'];
		}
		else {
			$name = "anonymous";
			$formPassword = "blank";
		}
	}
?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
	<META charset="utf-8">
	<META name="author" content="Matthew Robinson">

	<TITLE>Mt. Muriel Ski Guides</TITLE>

	<link href="Stylesheet.css" rel="stylesheet" type="text/css">

</HEAD>

<BODY>
	<div class="gridPage">
		<!---Header--->
		<?php include("header.php"); ?>
		<!---End Header--->


		<!---Nav-->
		<?php include("nav.php"); ?>
		<!---End Nav-->

		<!---Main Content--->
		<div class="content">
			<DIV class="login">
<?php
$sqlQuery = 'SELECT * FROM lab_8.users WHERE username="'.$name.'" AND password="'.$formPassword.'"';
$cursor = mysqli_query($db_connect, $sqlQuery)

 ?>
								<BR>
			<?PHP
				if ($_SESSION['UserName'] == 'anonymous')
				{
			?>

								<FORM action="login.php" method="post">
									<input type="text" placeholder="Enter Username" name="username" required>
							    <input type="password" placeholder="Enter Password" name="password" required>
    							<button type="submit">Login</button>
								</FORM>
			<?PHP
		}

		 if (mysqli_num_rows($cursor) > 0) {
			 	$_SESSION['UserName'] = $name;
					echo "Welcome " . $_SESSION['UserName'] . "<BR>";
			?>

								<FORM action="login.php" method="post">
									<INPUT type="hidden" name="username" value="anonymous">
									<INPUT type="hidden" name="password">	
									<INPUT type="submit" value="LOG OUT">
								</FORM>

			<?PHP

				}
				else {
					//invalid login code
				}
			?>
								<BR>
							</DIV>
		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
