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
		<div style="text-align:center" class="content">
			<form onsubmit="validate()">
				<label for="firstName"> First Name: </label><br>
				<input type="text" id="firstName" name="firstName"><br>

				<label for="lastName"> Last Name: </label><br>
				<input type="text" id="lastName" name="lastName"><br>

				<label for="email"> Email </label><br>
				<input type="text" id="email" name="email"><br>

				<label for="dob"> Date of Birth: </label><br>
				<input type="date" id="dob" name="dob">

				<p id="radioPrompt">Are you a </p>
				<input type="radio" id="ski" name="sport" value="ski" checked>
				<label for="ski">Skier</label><br>
				<input type="radio" id="sb" name="sport" value="sb">
				<label for="sb">Snowboarder</label><br>
				<br>

				<input type="submit" value="Submit">
			</form>
		</div>

		<!---Footer--->
		<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>

	<script>
		function validate() {
			var firstName = document.getElementById("firstName").value;
			var lastName = document.getElementById("lastName").value;
			var usrEmail = document.getElementById("email").value;
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if (firstName.length == 0) {
				alert("Please enter a First Name");
			} else if (lastName.length == 0) {
				alert("Please enter a Last Name");
			} else if (re.test(usrEmail) == false) {
				alert("Please enter a valid email");
			}

		}
	</script>

</BODY>

</HTML>
