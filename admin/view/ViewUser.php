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
        $name = $row['firstname'];
        $email = $row['email'];
        $password = $row['pwd'];
        $gender = $row['gender'];
        $dob = $row['DateOfBirth'];
		$username = $row['username'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                    <p>Name</p>
                </div>
                <div>
                    <p>Email</p>
                </div>
                <div>
                    <p>Gender</p>
                </div>
                <div>
                    <p>DateOfBirth</p>
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
    <script src="../js/viewUser.js"></script>
    <script>
        MyAjaxFunc();
    </script>
    <div class="back-btn">
    <a href="AHome.php">Back</a>
	<br><br>
    </div>
</body>
</html>