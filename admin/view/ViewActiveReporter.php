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
        $gender = $row['gender'];
        $dob = $row['DateOfBirth'];
        $Religion = $row['Religion'];
        $PresentAddress = $row['PresentAddress'];
        $PermanentAddress = $row['PermanentAddress'];
        $phone = $row['phone'];
        $email = $row['email'];
        $username = $row['username'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/regrequest.css">
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
                    <p>firstName</p>
                </div>
                <div>
                    <p>Gender</p>
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
    <script src="../js/viewActiveReporter.js"></script>
    <script>
        MyAjaxFunc();
    </script>
</body>
</html>