<?php
include_once('../model/db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$userdata = $connection->getprofiledata($conobj, "admin",$_SESSION["uname"]);
$connection->CloseCon($conobj);
?>