<?php
session_start();

if (count($_SESSION) === 0) {
	header("Location: ALogout.php");
}
require_once('../control/AProfileAction.php');

$color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<?php
include "../control/AProfileAction.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="../css/Profile.css">
	<link rel="stylesheet" href="../css/nav.css">
</head>

<body style="background-color: #EDD2F3;">
<div class="bcolour">
	<div class="profile">
		<h1>Profile</h1>
	</div>
	<form action="" method="post">
		<?php
		$q = mysqli_query($db, "SELECT * FROM admin WHERE username='$_SESSION[uname]' ;");
		?>
		<?php
		$row = mysqli_fetch_array($q);
		?>

        <div class="p-info">
		<table border="1">
			<thead>

				<tr>
					<th>Name</th><?php echo "<td>";
									echo $row['firstname'];
									echo "</td>"; ?>
				</tr>
				<tr>
					<th>Gender</th><?php echo "<td>";
									echo $row['gender'];
									echo "</td>"; ?>
				</tr>
				<tr>
					<th>Date of Birth</th><?php echo "<td>";
											echo $row['DateOfBirth'];
											echo "</td>"; ?>
				</tr>
				<tr>
					<th>Religion</th><?php echo "<td>";
										echo $row['Religion'];
										echo "</td>"; ?>
				</tr>
				<tr>
					<th>Present Address</th><?php echo "<td>";
											echo $row['PresentAddress'];
											echo "</td>"; ?>
				</tr>
				<tr>
					<th>Permanent Address</th><?php echo "<td>";
												echo $row['PermanentAddress'];
												echo "</td>"; ?>
				</tr>
				<tr>
					<th>Phone</th><?php echo "<td>";
									echo $row['phone'];
									echo "</td>"; ?>
				</tr>
			</thead>
		</table>
		</div>

		<div class="back-btn">
		<a href="AUpdateProfile.php">Update Profile</a>
		</div>
		<div class="back-btn2">
        <a href="AHome.php">Back</a>
		</div>
    </div>

	</div>

</body>
</html>