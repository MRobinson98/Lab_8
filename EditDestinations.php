<?php session_start(); // persistent HTTP session
if (!isset($_SESSION['UserName'])){
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

	<TITLE>Edit Destinations</TITLE>

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
			<div class="editDestinations">
				<h1> Add a New Destination </h1>
				<input type="button" onclick="location.href='EditPricing.php';" value="Edit Pricing"/>
					<form>
						<label for="destName">Destination Name</label><br>
						<input type="text" id="destName" name="destName"><br>
						<label for="description"> Enter Description</label><br>
						<textarea id="description" rows="4" cols="50"></textarea><br>
						<label for="image"> Upload Image</label><br>
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
