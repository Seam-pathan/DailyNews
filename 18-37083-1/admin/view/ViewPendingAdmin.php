<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}
	require_once('../control/AProfileAction.php');

   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<?php
  require('../control/getprofiledata.php');
  if ($userdata->num_rows > "0") {
    while ($row = $userdata->fetch_assoc()) {
        $id = $row['id'];
        $firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$gender = $row['gender'];
		$dob = $row['DateOfBirth'];
		$Religion=$row['Religion'];
		$PresentAddress=$row['PresentAddress'];
		$PermanentAddress=$row['PermanentAddress'];
		$phone=$row['phone'];
        $email = $row['email'];
		$username = $row['username'];
        // $password = $row['password']; 
        // $image =  $row['image'];
        // $doj = $row['doj'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/regrequest.css">
	<link rel="stylesheet" href="../css/nav.css">
	<title>Document</title>
</head>
<body>
<section id="sum-info">
    
	<div id="main-container">
		<div class="grid-container-1">
			<div>
				<p>Id</p>
			</div>
			<div>
				<p>firstname</p>
			</div>
			<div>
				<p>lastname</p>
			</div>
			<div>
				<p>gender</p>
			</div>
			<div>
				<p>date of birth</p>
			</div>
			<div>
				<p>Religion</p>
			</div>
			<div>
				<p>PresentAddress</p>
			</div>
			<div>
				<p>PermanentAddress</p>
			</div>
			<div>
				<p>phone</p>
			</div>
			<div>
				<p>Email</p>
			</div>
			<div>
				<p>username</p>
			</div>
			<div>
				<p>Actions</p>
			</div>
		</div>
	</div>
	
</section>
    <script src="../js/viewPendingAdmin.js"></script>
    <script>
        MyAjaxFunc();
    </script>
	<div class="back-btn">
	<a href="AHome.php">Back</a>
	<br><br>
	</div>
</body>
</html>