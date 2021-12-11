<?php
session_start();

if (count($_SESSION) === 0) {
    header("Location: ../view/ELogout.php");
}
?>

<?php
include_once('../model/db.php');
function updateEditor($firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd)
{
    $connection = new db();
    $conobj = $connection->OpenCon();
    $insertStatus = $connection->updateEditorData($conobj, "editor_info", $firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd);
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
    $username2 = $_REQUEST["username2"];

    $pwd = $_REQUEST["pwd"];

    if (empty($firstname2) or empty($gender2) or empty($dob2) or empty($PresentAddress2) or empty($PermanentAddress2) or empty($phone2) or empty($email2) or empty($username2) or empty($pwd)) {
        echo "Fill up the form properly";
        $flag=0;
    } else {
        $validatefirstname = "your name is " . $firstname2;
    }
    if ($flag == 1) {

        $username2 = $_POST["username2"];
        $flag = updateEditor($firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd);
        if ($flag) {

            header("Location: ../view/EProfileUpdate.php");
        } 
        else {
            $userAddingvalidation = "something went wrong. try again later";
            }
    }       else if ($flag == 0) {
            echo " not valid";
            echo $flag;
    }   else {
            echo "none of them";
    }   
}
?>