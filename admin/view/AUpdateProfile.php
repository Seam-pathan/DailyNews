<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}

   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<include_once('../controller/AUpdateProfileAction.php')>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Example</title>
	<script src="../js/UpdateValidation.js"></script>
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body style="background-color: #EDD2F3;">
<div class="update">
	<div>
	<h1 class="updateProfile">Update Information</h1>

	<div class="formc">
	    <form action="../control/AUpdateProfileAction.php" OnSubmit="return validateForm()"  method="post">
		Enter your Name: <input type="text" id="firstname" name="firstname2">
		<br><br>
		
		Gender: 
		<input type="radio" name="gender2" checked="checked" value="male">Male
		<input type="radio" name="gender2" value="female">Female
		<input type="radio" name="gender2" value="other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" id="dob" name="dob2">
        <br><br>

        <lable>Religion:</lable>
        <select id="Religion" name="Religion2" >
			<option value="islam">Islam</option>
			<option value="christianity">Christianity</option>
			<option value="hinduism">Hinduism</option>
			<option value="buddhism">Buddhism</option>
		</select>
		<br><br>

	    <label for="PresentAddress">PresentAddress:</label>
	    <textarea name="PresentAddress2" id="PresentAddress"></textarea>
	    <br><br>

	    <label for="PermanentAddress">PermanentAddress:</label>
	    <textarea name="PermanentAddress2" id="PermanentAddress"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone2">
	    <br><br>

	   <lable>Enter your email:</lable>
       <input type="email" id="email" name="email2">
       <br><br>

       Username: <input type="text" id="username" name="username2">
       <br><br>

	   <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>
	   
       <input class="submit-btn" type="submit" name="submit" value="update">
	</form>
	</div>
	   <div class="back-btn2">
       <a href="AProfile.php">Back</a>
	   </div>
	</div>
</div>
</body>
</html>