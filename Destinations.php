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

	<TITLE>Destinations</TITLE>

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
			<h1 style="text-align: center"> Our Destinations</h1>
			<h2 style="text-align: center"> Revelstoke </h2>
			<div class="pageConent">
				<img class="contentPic" src="resources/Revelstoke.jpg" alt="Revelstoke">
				<div class="contDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis
					aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
					<button id="checkoutBtn" class="checkoutBtn">Select This Destination </button>
				</div>

			</div>

			<div class="CheckoutWindow" id="CheckoutWindow">
				<div class="windowContent">
					<h2 id="destinationName"> Destination_Name </h2>
					<p> Select a Tour Option </p>
					<form>
						<input type="radio" id="heli" name="tourOption" value="heli">
						<label for="heli"> Heliskiing </label><br>
						<input type="radio" id="cat" name="tourOption" value="cat">
						<label for="cat"> Catskiing </label><br>
						<input type="radio" id="tour" name="tourOption" value="tour">
						<label for="cat"> Guided Alpine Touring </label><br>

					<p> Select rental gear </p>

						<input type="checkbox" id="skis" name="skis" value="skis">
						<label for="vehicle1"> Skis and Poles</label><br>
						<input type="checkbox" id="skins" name="skins" value="skins">
						<label for="vehicle1"> Climbing Skins</label><br>
						<input type="checkbox" id="safety" name="safety" value="safety">
						<label for="vehicle1"> Safety Gear & Backpack</label><br>
						<input type="submit" value="Checkout">
					</form>
				</div>
			</div>
		</div>


		<!---Footer--->
	<?php include("footer.php"); ?>
		<!---End Footer--->
	</div>

	<script>
		var checkoutBtn = document.getElementById("checkoutBtn");
		var CheckoutWindow = document.getElementById("CheckoutWindow");

		checkoutBtn.onclick = function() {
			CheckoutWindow.style.display = "block";
		}
	</script>
</BODY>

</HTML>
