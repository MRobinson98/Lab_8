<?php session_start(); // persistent HTTP session 	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['username'];
		if (!empty($name)){
			$_SESSION['UserName'] = $name;
		}
	?>
<!DOCTYPE html>

<HTML lang="en">

<HEAD>
	<META charset="utf-8">
	<META name="author" content="Matthew Robinson">

	<TITLE>Upload Review</TITLE>

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
			<div class="uploadReview">
				<h1> Upload Review </h1>
				<div class="AccountNav">
					<input type="button" onclick="location.href='CustomerProfile.php';" value="View Profile" />
					<input type="button" onclick="location.href='EditProfile.php';" value="Edit Profile" />
				</div>
				<form>
					<label for="title"> Title </label><br>
					<input type="text" id="title" name ="title"><br>
					<label for="review"> Enter Your Review </label> <br>
					<textarea id ="review" rows="8" cols="70"></textarea><br>
					<label for="media">Upload Media</label><br>
					<input type="file" id="media" name="media"><br>
					<input type="submit" name="submit">
				</form>
			</div>

		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
