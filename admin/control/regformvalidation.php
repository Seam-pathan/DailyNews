<?php
require('signupcheck.php');
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


    if (empty($firstname) or empty($gender) or empty($dob) or empty($PresentAddress) or empty($PermanentAddress) or empty($phone) or empty($email) or empty($username) or empty($pwd))
	{
	    echo "Fill up the form properly";
	}
    else {
        $validateName = "your name is " . $name;
    }
    // maximum name length 16 characer
    // if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    //     $validateName = "you must enter your name";
    //     $flag = 0;
    // } else {
    //     $validateName = "your name is " . $name;
    // }
    // if (empty($email) || !preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $email)) {
    //     $validateEmail = "you must enter your email";
    //     $flag = 0;
    // } else {
    //     $validateEmail = "your email is " . $email;
    // }

    // if (!isset($_REQUEST["gender"])) {
    //     $genderValidation = "select your gender";
    //     $flag = 0;
    // } else {
    //     $gender = $_REQUEST["gender"];
    //     $genderValidation = "your gender is " . $gender;
    // }
    // if (empty($password) || empty($confirmPassword)) {
    //     $validPassword = "enter valid password ";
    //     $flag = 0;
    // } elseif ($password != $confirmPassword) {
    //     $validPassword = "password not match";
    //     $flag = 0;
    // } elseif (strlen($password) < 8) {

    //     $validPassword = "password must contain at least 8 characters";
    //     $flag = 0;
    // } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/", $password)) {

    //     $validPassword = "condition  not match";
    //     $flag = 0;
    // } else {
    //     $validPassword = "password correct";
    // }

    // if (empty($date)) {

    //     $valiDate = "date field is required";
    //     $flag = 0;
    // } else {
    //     $valiDate = "select date is " . $date;
    // }

    // if ($flag == 1) {
    //     if (checkUserExists($uname)) {
    //         $validateEmail = "already has an user with that email";
    //     } else {
    //         $flag=insertAdmin($name, $email,$password,$gender,$date);
    //         if($flag)
    //         {
    //             header("Location: ../view/signupsuccess.php");
                
    //         }
    //         else
    //         {
    //             $userAddingvalidation="something went wrong. try again later";
    //         }
    //     }
    // }
}
