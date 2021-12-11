<?php 
	require('../control/ERegistrationAction.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="../css/Login.css">
</head>
<body class="bg-color">
	<?php 
		require('../view/EHeader.php')  
	?>
		<h2>Editor Information</h2>

	<form action="../control/ERegistrationAction.php" method="post">
	<fieldset>
		<legend>Basic Information:</legend>
		First Name: <input type="text" name="firstname">
		<br>
		<br>
		Last Name: <input type="text" name="lastname">
		<br>
		<br>
		Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Others">Other
		<br>
		<br>
		Date of Birth:
		<input type="date" name="dob">
		<br><br>
		Religion:
		<select name="Religion">
			<option value="Muslim">Muslim</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddhist">Buddhist</option>
			<option value="Christian">Christian</option>
			<option value="Other">Other</option>
		</select>
		<br><br>
	</fieldset>
	<fieldset>
		<legend>Contact Information:</legend>
		PresentAddress:
		<textarea name="PresentAddress"></textarea>
		<br>
		<br>
		PermanentAddress:
		<textarea name="PermanentAddress"></textarea>
		<br><br>
		Phone:
		<input type="tel" id="phone" name="phone">
		<br><br>
		Email:
		<input type="email" name="email">
		<br><br>
	</fieldset>
	<fieldset>
		<legend> Account Information: </legend>

		Username: <input type="text" name="username">
		<br><br>
		Password:
		<input type="password" id="pwd" name="pwd">
		<br><br>
	</fieldset>
		<br>
		<input type="submit" name="submit">
	</form> 
	Registered? <a href="../view/ELogin.php">Click here</a> for Login.
	<br> <br>
	<?php 
	require('../view/EFooter.php'); 
	?>
</body>
</html>