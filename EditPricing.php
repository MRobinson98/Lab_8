<!DOCTYPE html>

<HTML lang="en">

<HEAD>
	<META charset="utf-8">
	<META name="author" content="Matthew Robinson">

	<TITLE>Edit Pricing</TITLE>

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
			<div class="editPricing">
				<h1> Edit Pricing Information </h1>
				<input type="button" onclick="location.href='EditDestinations.php';" value="Edit Destinations"/>

				<form>
				<label for="pricing"> Select a Product to Update: </label><br>
					<select id="pricing">
						<option value="heli"> Heliskiing </option>
						<option value="cat"> Catskiing </option>
						<option value="touring"> Alpine Touring </option>
						<option value="ski"> Ski/Snowboard </option>
						<option value="safety"> Safety Gear </option>
					</select><br>

					<label for="description">Enter description and pricing</label><br>
					<textarea id="description" rows="4" cols="50"></textarea><br>

					<label for="image">Upload Image </label><br>
					<input type="file" id="image" name="image"><br>
					<input type="submit" value="Submit">
				</form>

			</div>
		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>
</BODY>

</HTML>
