<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>

	<h1>Form Action</h1>

	<?php 
		$firstname = $_POST['firstname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$Religion = $_POST['Religion'];
		$PresentAddress = $_POST['PresentAddress'];
		$PermanentAddress = $_POST['PermanentAddress'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];


		if (empty($firstname) or empty($gender) or empty($dob) or empty($PresentAddress) or empty($PermanentAddress) or empty($phone) or empty($email) or empty($username) or empty($pwd))
		{
			echo "Fill up the form properly";
		}
		else {
			$firstname = sanitize($firstname);
			$gender = sanitize($gender);
			$dob = sanitize($dob);
		    $Religion = sanitize($Religion);
		    $PresentAddress = sanitize($PresentAddress);
		    $PermanentAddress = sanitize($PermanentAddress);
		    $phone = sanitize($phone);
		    $email = sanitize($email);
		    $username = sanitize($username);
		    $pwd = sanitize($pwd);

		    $handle1 = fopen("AdminData.json", "a");

		    $arr1 = array('firstname' => $firstname, 'gender' => $gender, 'dob' => $dob, 'Religion' => $Religion, 'PresentAddress' => $PresentAddress, 'PermanentAddress' => $PermanentAddress, 'phone' => $phone, 'email' => $email,
		     'username' => $username, 'pwd' => $pwd);

		     $encode = json_encode($arr1);
		     $res = fwrite($handle1, $encode ."\n");
		     if ($res) {
				echo "Successfully saved";
			}
			else {
				echo "Error while saving";
			}
		}
		
		function sanitize($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<br><br>

	<a href="Login.php">Login</a>

</body>
</html>