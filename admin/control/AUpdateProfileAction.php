<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ../view/ALogout.php");
	}
?>
<?php
   include_once('../model/db.php');
   function updateAdmin($firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd)
   {
       $connection = new db();
       $conobj = $connection->OpenCon();
       $insertStatus = $connection->updateAdminData($conobj, "admin", $firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd);
       return $insertStatus;
   }
   
   $validateName = "";
   $genderValidation = "";
   $validPassword = "";
   $valiDate = "";
   $flag = 1;
   $userAddingvalidation = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
       $firstname2 = $_REQUEST["firstname2"];
	   $gender2 = $_REQUEST["gender2"];
	   $dob2 = $_REQUEST["dob2"];
	   $Religion2 = $_REQUEST["Religion2"];
	   $PresentAddress2 = $_REQUEST["PresentAddress2"];
	   $PermanentAddress2 = $_REQUEST["PermanentAddress2"];
	   $phone2 = $_REQUEST["phone2"];
	   $email2 = $_REQUEST["email2"];

	   $pwd = $_REQUEST["pwd"];

       if (empty($firstname2) || strlen($firstname2) < 5) {
        $validateName = "you must enter your name";
        $flag = 0;
        echo $validateName;
    } else {
        $validateName = "your name is " . $firstname2;
    }
    if (!isset($_REQUEST["gender2"])) {
        $genderValidation = "select your gender";
        $flag = 0;
        echo $genderValidation;
    } else {
        $gender2 = $_REQUEST["gender2"];
        $genderValidation = "your gender is " . $gender2;
    }
    if (empty($pwd)) {
        $validPassword = "enter valid password ";
        $flag = 0;
        echo $validPassword;
    } elseif (strlen($pwd) < 8) {

        $validPassword = "password must contain at least 8 characters";
        $flag = 0;
        echo $validPassword;
    } else {
        $validPassword = "password correct";
    }

    if (empty($dob2)) {

        $valiDate = "date field is required";
        $flag = 0;
        echo $valiDate;
    } else {
        $valiDate = "select date is " . $dob2;
        echo $valiDate;
    }

    if ($flag == 1) {
    
        $username2 = $_POST["username2"];
        $flag = updateAdmin($firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd);
        if ($flag) {

            header("Location: ../view/AUpdateProfile.php");
        } else {
            $userAddingvalidation = "something went wrong. try again later";
        }
    }
    else if($flag==0){
        echo " not valid";
        echo $flag;
    }
    else{
        echo "non of them";
    }
   }
?>