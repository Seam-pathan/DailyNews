<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location:../view/ELogout.php");
	}
	require_once('../control/EProfileAction.php');

?>

<?php
include "../control/EProfileAction.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	 <link rel="stylesheet" href="../css/Style1.css">
</head>
<body class="bg-color">
	<h1>Profile</h1>
	<form action="" method="post">
	<?php
	  $q=mysqli_query($db,"SELECT * FROM editor_info WHERE username='$_SESSION[username]' ;");
	  ?>
	  <?php
	     $row =mysqli_fetch_array($q);
	  ?>
	  
	<table border="1">
		<thead>
			
				<tr>
					<th>Name
						</th>
							<?php  echo "<td>";
							echo $row['firstname'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Gender
						</th>
							<?php  echo "<td>";
							echo $row['gender'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Date of Birth
						</th>
							<?php  echo "<td>";
							echo $row['DateOfBirth'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Religion
						</th>
							<?php  echo "<td>";
							echo $row['religion'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Present Address
						</th>
							<?php  echo "<td>";
							echo $row['PresentAddress'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Permanent Address
						</th>
							<?php  echo "<td>";
							echo $row['PermanentAddress'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Phone
						</th>
							<?php  echo "<td>";
							echo $row['phone'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Email
						</th>
							<?php  echo "<td>";
							echo $row['email'];
							echo "</td>"; 
							?> 
				</tr>
				<tr>
					<th>Username
						</th>
							<?php  echo "<td>";
							echo $row['username'];
							echo "</td>"; 
							?> 
				</tr>
				
		</thead>
	</table>
	<br><br>


    <a href="../view/EProfileUpdate.php">Update Profile</a>
	<br><br>
    <a href="../view/EHome.php">Back</a>
    <br><br>

</body>
</html>