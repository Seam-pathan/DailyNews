<?php
$color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
require('../control/ARegistrationAction.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form Example</title>
	<link rel="stylesheet" href="../css/ARegistration.css">
	<link rel="stylesheet" href="../css/Login.css">
	<script src="../js/regvalidation.js"></script>
</head>

<body class="bg-color">

	<div class="reg">
		<?php require('AHeader.php')  ?>
		<h1>Register form for Admin</h1>

		<form class="Rform" action="../control/ARegistrationAction.php" OnSubmit="return validateForm()" method="post">

			<lable>First Name &nbsp &nbsp &nbsp &nbsp: </lable>
			<input type="text" id="firstname" name="firstname">
			<br>
			<br>
			<lable>Last Name &nbsp &nbsp &nbsp &nbsp: </lable>
			<input type="text" id="lastname" name="lastname">
			<br>
			<br>
			<lable>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</lable>
			<input type="radio" name="gender" checked="checked" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other
			<br>
			<br>
			<lable>Date of Birth &nbsp &nbsp:</lable>
			<input type="date" id="dob" name="dob">
			<br><br>

			<lable>Religion &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</lable>
			<select id="Religion" name="Religion">
				<option value="islam">Islam</option>
				<option value="christianity">Christianity</option>
				<option value="hinduism">Hinduism</option>
				<option value="buddhism">Buddhism</option>
			</select>
			<br><br>

			<h2>Contact Information</h2>

			<lable for="PresentAddress"> PresentAddress &nbsp &nbsp &nbsp &nbsp &nbsp:</lable>
			<textarea id="PresentAddress" name="PresentAddress"></textarea>
			<br><br>

			<lable for="PermanentAddress">PermanentAddress &nbsp &nbsp:</lable>
			<textarea id="PermanentAddress" name="PermanentAddress"></textarea>
			<br><br>

			<lable for="Phone">Phone &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</lable>
			<input type="tel" id="phone" name="phone">
			<br><br>


			<lable>Enter your email &nbsp &nbsp &nbsp &nbsp:</lable>
			<input type="email" id="email" name="email">
			<br><br>


			<h2>Account Information</h2>

			<lable>Username &nbsp &nbsp:</lable> 
			<input type="text" id="username" name="username">
			<br><br>

			<lable for="pwd">Password &nbsp &nbsp:</lable>
			<input type="password" id="pwd" name="pwd">
			<br><br>


			<input class="Sbtn2" type="submit" name="submit">
		</form>
		Registered? <a href="ALogin.php">Click here</a> for login.
		<br><br>

		<?php require('AFooter.php'); ?>
	</div>
</body>

</html>