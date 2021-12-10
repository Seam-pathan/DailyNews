<?php
$color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
include('../model/db.php');
$validatefirstname = "";
$validatelastname = "";
$validategender = "";
$validateDateOfBirth = "";
$validateReligion = "";
$validatePresentAddress = "";
$validatePermanentAddress = "";
$validatephone = "";
$validateemail = "";
$validateusername = "";
$validatepwd = "";
$flag = 1;
$userExistsValidation = "";
$userAddingvalidation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$DateOfBirth = $_POST["dob"];
	$Religion = $_POST["Religion"];
	$PresentAddress = $_POST["PresentAddress"];
	$PermanentAddress = $_POST["PermanentAddress"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];

	if (empty($firstname) or empty($gender) or empty($DateOfBirth) or empty($PresentAddress) or empty($PermanentAddress) or empty($phone) or empty($email) or empty($username) or empty($pwd)) {
		echo "Fill up the form properly";
		$flag=0;
	} else {
		$validatefirstname = "your name is " . $firstname;
	}

	if ($flag == 1) {
		$db=new db();
		if ($db->checkUserExists("admin", $username)) {
			$validateEmail = "already has an user with that username";
		} else {
			$flag = $db->addUser("admin", $firstname, $lastname, $gender, $DateOfBirth, $Religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $pwd);
			if ($flag) {
				header("Location: ../view/ALogin.php");
			} else {
				$userAddingvalidation = "something went wrong. try again later";
			}
		}
	}
}
	
// <a href="../view/ALogin.php">Login</a>