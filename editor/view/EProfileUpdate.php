<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ../control/ELogout.php");
	}

?>
<include_once('../control/EProfileUpdateAction.php')>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<link rel="stylesheet" href="../css/Style1.css">
</head>
<body class="bg-color">
	<h1>Update Information</h1>

	<form action="../control/EProfileUpdateAction.php" method="post">
		Enter your Name: <input type="text" name="firstname2">
		<br><br>
		
		Gender: 
		<input type="radio" name="gender2" checked="checked" value="Male">Male
		<input type="radio" name="gender2" value="Female">Female
		<input type="radio" name="gender2" value="Other">Other
		<br>
		<br>
		<lable>Date of Birth:</lable>
        <input type="date" name="dob2">
        <br><br>

        <lable>Religion:</lable>
        <select name="Religion2">
			<option value="Muslim">Muslim</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddhist">Buddhist</option>
			<option value="Christian">Christian</option>
			<option value="Other">Other</option>
		</select>
		<br><br>

	    <label for="PresentAddress">PresentAddress:</label>
	    <textarea name="PresentAddress2"></textarea>
	    <br><br>

	    <label for="PermanentAddress">PermanentAddress:</label>
	    <textarea name="PermanentAddress2"></textarea>
	    <br><br>

	    <label for="Phone">Phone:</label>
	    <input type="tel" id="phone" name="phone2">
	    <br><br>

	   <lable>Enter your email:</lable>
       <input type="email" name="email2">
       <br><br>

       Username: <input type="text" name="username2">
       <br><br>

	   <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>
	   

       <input type="submit" name="submit" value="update">
	</form> 
		<a href="../view/EProfile.php">Back</a>
		<br>
		<br>
		<a href="../control/ELogout.php">Logout</a>
</body>
</html>