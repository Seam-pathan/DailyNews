<?php
session_start();
if (count($_SESSION) === 0) {
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
	<link rel="stylesheet" href="../css/nav.css">
</head>

<body style="background-color: <?php echo $color; ?>;">
	<div class=navbar>
		<h1>Home Page</h1>
		<div class=navlink>
			<a href="ViewActiveAdmin.php">Admin</a>
			<br><br>
			<a href="ViewActiveEditor.php">Editor</a>
			<br><br>
			<a href="ViewActiveReporter.php">Reporter</a>
			<br><br>
			<a href="AUserManagment.php">User</a>
			<br><br>
		</div>
		<div class=profileName>
			<a href="AProfile.php">Profile |</a>
			<a href="../control/ALogout.php">Logout</a>
		</div>
	</div>

	<div class="wlcm">
		<h1>Welcome! </h1>
		<h2>Admin <span class="username"><?php echo $_SESSION['uname'] ?></span></h2>
	</div>

	<div class=pending>
		<div>
			<a href="ViewPendingAdmin.php">Pending Admin</a>
		</div>
		<div>
			<a href="ViewPendingReporter.php">Pending Repoter</a>
		</div>
		<div>
			<a href="ViewPendingEditor.php">Pending Editor</a>
		</div>
		<div>
			<a href="ViewUser.php">All Users</a>
		</div>
	</div>
</body>
</html>