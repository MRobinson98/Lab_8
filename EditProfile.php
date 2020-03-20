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
			<div class="GuideProfile">
				<h1> Welcome account_name </h1>
				<form onsubmit="validate()">
					<label for="firstName"> First Name: </label><br>
					<input type="text" id="firstName" name="firstName"><br>

					<label for="lastName"> Last Name: </label><br>
					<input type="text" id="lastName" name="lastName"><br>

					<label for="email"> Email </label><br>
					<input type="text" id="email" name="email"><br>
					<input type="submit" value="Submit">
				</form>
			</div>
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
