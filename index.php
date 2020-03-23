<?php session_start(); // persistent HTTP session
// check if we already have a session started and make the default name
	// anonymous.

	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['username'];
		if (!empty($name)){
			$_SESSION['UserName'] = $name;
		}
	}?>
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

		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
