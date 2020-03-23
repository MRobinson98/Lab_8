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

	<TITLE>Trip Itinerary</TITLE>

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
			<div class="TripItinerary">
				<h1> Welcome account_name </h1>
				<h1> Trip Itinerary </h1>
				<div class="AccountNav">
					<input type="button" onclick="location.href='GuideProfile.php';" value="View Profile" />
					<input type="button" onclick="location.href='Schedule.php';" value="View Schedule" />
				</div>
				<div class="pageConent">
				<img class="contentPic" src="Resources/SkiGroup.jpg" alt="Photo by Joris Berthelot on Unsplash">
				<p class="contDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis
					aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			</div>
		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
