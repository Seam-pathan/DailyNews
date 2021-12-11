<?php
	session_start();

	if (count($_SESSION) === 0){
		header("Location: ../control/ELogout.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	 <link rel="stylesheet" href="../css/Home.css">
</head>
<body class="bg-color">
	<h2 class="header">Home Page</h2>
	<br> <br>
	<a href="EProfile.php">My Profile</a> -
	<a href="ViewUser.php">All Users</a> -
	<a href="ViewActiveAdmin.php">Admin</a> -
	<a href="ViewActiveEditor.php">Editor</a> -
	<a href="ViewActiveReporter.php">Reporter</a>
	<br><br>

	<p>Welcome, <?php echo $_SESSION['username']; ?></p>
	<br>

	<a href="../control/ELogout.php">Logout</a>

</body>
</html>