<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}
?>

<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Home Page</h1>
	<p>Welcome, Admin <?php echo $_SESSION['uname']; ?></p>

	<a href="AProfile.php">Profile</a>
	<br><br>
	<a href="ViewPendingAdmin.php">Pending Admin</a>
	<br><br>
	<a href="ViewPendingReporter.php">Pending Repoter</a>
	<br><br>
	<a href="ViewPendingEditor.php">Pending Editor</a>
	<br><br>
	<a href="ViewUser.php">All Users</a>
	<br><br>
	<a href="ViewActiveAdmin.php">Admin</a>
	<br><br>
	<a href="ViewActiveEditor.php">Editor</a>
	<br><br>
	<a href="ViewActiveReporter.php">Reporter</a>
	<br><br>

	<a href="AUserManagment.php">User</a>
	<br><br>

	<a href="../control/ALogout.php">Logout</a>

</body>
</html>