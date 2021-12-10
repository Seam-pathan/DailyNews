<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
   require('../control/ARegistrationAction.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
	<link rel="stylesheet" href="../css/Login.css">
	<script src="../js/regvalidation.js"></script>
</head>
<body class="bg-color">

<?php require('AHeader.php')  ?>
	<h1>Register form for Admin</h1>

	    <form action="../control/ARegistrationAction.php" OnSubmit="return validateForm()" method="post">
		First Name: <input type="text" id="firstname" name="firstname">
		<br>
		<br>
		Last Name: <input type="text" id="lastname" name="lastname">
		<br>
		<br>
		Gender: 
		<input type="radio" name="gender" checked="checked" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" id="dob" name="dob">
        <br><br>

        <lable>Religion:</lable>
        <select  id="Religion" name="Religion">
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
		</select>
		<br><br>

	<h2>Contact Information</h2>

	    <label for="PresentAddress">PresentAddress:</label>
	    <textarea id="PresentAddress" name="PresentAddress"></textarea>
	    <br><br>

	    <label for="PermanentAddress">PermanentAddress:</label>
	    <textarea id="PermanentAddress" name="PermanentAddress"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone">
	    <br><br>


	   <lable>Enter your email:</lable>
       <input type="email" id="email" name="email">
       <br><br>


       <h2>Account Information</h2>

       Username: <input type="text" id="username" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>


       <input type="submit" name="submit">
       </form>
       Registered? <a href="ALogin.php">Click here</a> for login.
	   <br><br>

	   <?php require('AFooter.php'); ?>
</body>
</html>