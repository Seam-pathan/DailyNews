<?php
 include_once('../model/db.php');
 function ForgetPass($pwd)
{
    $connection = new db();
    $conobj = $connection->OpenCon();
    $insertStatus = $connection->ForgetPass($conobj, "admin", $pwd, "admin");
    return $insertStatus;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $username = $_REQUEST["username"];
  $pwd = $_REQUEST["pwd"];
  $pwd2 = $_REQUEST["pwd2"];
  $pwd3 = $_REQUEST["pwd3"];

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
}
?>
    // if ($_SERVER['REQUEST_METHOD'] === "POST")
    // {
    //           $username = $_POST['username'];
		//           $pwd = $_POST['pwd'];
    //           $pwd2 = $_POST['pwd2'];
    //           $pwd3 = $_POST['pwd3'];
    //     $isValid = false;


    //     $data = file_get_contents("../model/AdminData.json");
		//     $handle2 = json_decode($data);
    //     foreach ($handle2 as $json){
    //         if($username === $json->username && $pwd === $json->pwd)
    //         {
    //           $json->pwd = $pwd2;
    //           echo "matched";
	  //           $isValid = true;
	  //           break;
    //         }
    //     }

    //   $encode = json_encode($handle2);
    //   file_put_contents('../model/AdminData.json',$encode);
    //     if ($isValid)
    //     {
    // 	    header("Location: ../view/ALogin.php");
    //     }
    //     else
    //     {
    // 	    echo "Login failed...";
    //     }
    // }