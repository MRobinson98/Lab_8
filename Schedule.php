<!DOCTYPE html>

<HTML lang="en">

<HEAD>
	<META charset="utf-8">
	<META name="author" content="Matthew Robinson">

	<TITLE>Template</TITLE>

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
			<div class="Schedule">
				<h1> Welcome account_name </h1>
				<div class="AccountNav">
					<input type="button" onclick="location.href='GuideProfile.php';" value="View Profile" />
					<input type="button" onclick="location.href='TripItinerary.php';" value="View Trip Itinerary" />
				</div>
				<img src="resources/MarchCalendar.jpg" alt="https://www.free-printable-calendar.com/2020/march-2020-printable-calendar.jpg">
			</div>
		</div>


		<!---Footer--->
		<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
