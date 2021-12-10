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
include "../control/AProfileAction.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="../css/Profile.css">
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Profile</h1>
	<form action="" method="post">
	<?php
	  $q=mysqli_query($db,"SELECT * FROM admin WHERE username='$_SESSION[uname]' ;");
	  ?>
	  <?php
	     $row =mysqli_fetch_array($q);
	  ?>
	  
	<table border="1">
		<thead>
			
				<tr><th>Name</th><?php  echo "<td>";
							echo $row['firstname'];
							echo "</td>"; ?> </tr>
				<tr><th>Gender</th><?php echo "<td>";
							echo $row['gender'];
							echo "</td>"; ?> </tr>
				<tr><th>Date of Birth</th><?php echo "<td>";
							echo $row['DateOfBirth'];
							echo "</td>";?></tr>
				<tr><th>Religion</th><?php echo "<td>";
							echo $row['Religion'];
							echo "</td>";?></tr>
				<tr><th>Present Address</th><?php echo "<td>";
							echo $row['PresentAddress'];
							echo "</td>";?></tr>
				<tr><th>Permanent Address</th><?php echo "<td>";
							echo $row['PermanentAddress'];
							echo "</td>";?></tr>
				<tr><th>Phone</th><?php echo "<td>";
							echo $row['phone'];
							echo "</td>";?></tr>
		</thead>
	</table>
	<br><br>


    <a href="AUpdateProfile.php">Update Profile</a>
	<br><br>
    <a href="AHome.php">Back</a>
    <br><br>

</body>
</html>