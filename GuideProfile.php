<!DOCTYPE html>

<HTML lang="en">

<HEAD>
	<META charset="utf-8">
	<META name="author" content="Matthew Robinson">

	<TITLE>GuideProfile</TITLE>

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
			<div class="Profile">
				<h1> Welcome account_name </h1>
				<div class="AccountNav">
					<input type="button" onclick="location.href='Schedule.php';" value="View Schedule" />
					<input type="button" onclick="location.href='TripItinerary.php';" value="View Trip Itinerary" />
				</div>
				<h3 style="font-size: 40px"> First Name </h3>
				<h3 id="firstName"> firstName </h3>
				<h3 style="font-size: 40px"> Last Name </h3>
				<h3 id="lastName"> lastName </h3>
				<h3 style="font-size: 40px"> Email </h3>
				<h3 id="email"> Email@example.com </h3>
				<input type="button" onclick="location.href='EditProfile.php';" value="Edit Profile"/>
			</div>
		</div>


		<!---Footer--->
		<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>

</BODY>

</HTML>