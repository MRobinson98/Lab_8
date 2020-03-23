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
		<button class="reviewButton"> Review Feb 23, 2020 (Click to show) </button>
		<div class="reviewStyle">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit leo tincidunt elit dictum mollis. Morbi ornare velit id velit consectetur sodales. Praesent quis massa leo. Nullam eget consequat lectus. Aenean sagittis aliquam vehicula.
			Phasellus feugiat nibh a lorem viverra lobortis. Praesent feugiat bibendum arcu at suscipit. Nunc porta, turpis eu pharetra tincidunt, augue velit ullamcorper neque, non tincidunt tortor neque ut ligula. Sed sapien lacus, dapibus ut tincidunt
			a, pharetra at mauris. Donec scelerisque, ex at vulputate tempus, sem lorem fermentum est, eget semper odio ante quis lacus. Curabitur vestibulum, dolor in maximus placerat, ex nulla dignissim odio, vitae congue augue eros eu massa. </div>

		<button class="reviewButton"> Review Feb 16, 2020 (Click to show) </button>
		<div class="reviewStyle">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit leo tincidunt elit dictum mollis. Morbi ornare velit id velit consectetur sodales. Praesent quis massa leo. Nullam eget consequat lectus. Aenean sagittis aliquam vehicula.
			Phasellus feugiat nibh a lorem viverra lobortis. Praesent feugiat bibendum arcu at suscipit. Nunc porta, turpis eu pharetra tincidunt, augue velit ullamcorper neque, non tincidunt tortor neque ut ligula. Sed sapien lacus, dapibus ut tincidunt
			a, pharetra at mauris. Donec scelerisque, ex at vulputate tempus, sem lorem fermentum est, eget semper odio ante quis lacus. Curabitur vestibulum, dolor in maximus placerat, ex nulla dignissim odio, vitae congue augue eros eu massa. </div>
	</div>


	<!---Footer--->
<?php include("footer.php"); ?>
	<!---End Footer--->
	</div>
	<script>
		var review = document.getElementsByClassName("reviewButton");
		var i;

		for (i = 0; i < review.length; i++) {
			review[i].addEventListener("click", function() {
				var reviewContent = this.nextElementSibling;

				if (reviewContent.style.display === "block") {
					reviewContent.style.display = "none";
				} else {
					reviewContent.style.display = "block";
				}
			});

		}
	</script>

</BODY>

</HTML>
