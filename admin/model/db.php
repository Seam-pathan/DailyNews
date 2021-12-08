<?php
class db
{
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "test";
        $con = new mysqli($dbhost, $dbuser, $dbpass, $db);
        return $con;
    }
    function CheckUser($con, $table, $username, $pwd)
    {
        $status = "approved";
        $result = $con->query("SELECT * FROM " . $table . " WHERE username='" . $username . "' AND pwd='" . $pwd . "' ANd status = '" . $status . "'");
        return $result;
    }
    function CheckUserexais($con, $table, $username)
    {
        $result = $con->query("SELECT * FROM " . $table . " WHERE username='" . $username . "'");
        return $result;
    }
    // function addAdmin($con, $table, $name, $email, $password, $gender, $dob, $type)
    // {
    //     $status = "pending";
    //     $path = "../../resources/profile/default.png";

    //     $sql = "INSERT INTO " . $table . " 
    //     (name, email, password, gender, dob, status, image) VALUES 
    //     ('" . $name . "','" . $email . "','" . $password . "','" . $gender . "','" . $dob . "','" . $status . "','" . $path . "')";

    //     if ($con->query($sql) === TRUE) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    function getPendingSignupRequest($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'");
        return $result;
    }

    // function getPendingEditorSignupRequest($con, $table)
    // {
    //     $result = $con->query("SELECT * FROM  $table where status = 'pending'");
    //     return $result;
    // }

    function getPendingEditorSignupRequest($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'");
        return $result;
    }

    function getAprrovedCharacter($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'approved'");
        return $result;
    }

    function getPendingReporterSignupRequest($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'");
        return $result;
    }
    function getaAllUser($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'approved'");
        return $result;
    }

    function update_user_status($con, $table, $username, $status)
    {
        $sql = "update " . $table . " set status = '" . $status . "' where username = '" . $username . "'";
           
            $result = $con->query($sql);
    }
    function delete_news($con, $table, $id)
    {
        $result = $con->query("DELETE FROM $table WHERE id ='" . $id . "'");
        return $result;
    }
    function CloseCon($con)
    {
        $con->close();
    }

    //function for get profile data
    function getprofiledata($con, $table, $username)
    {
        $result = $con->query("SELECT * FROM  $table where username = '" . $username . "'");
        return $result;
    }
    function getnewsdata($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table");
        return $result;
    }
    function getreport($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table");
        return $result;
    }
    function deleteUser($con, $table, $username)
    {
        $result = $con->query("DELETE FROM  $table WHERE username = '" . $username . "'");
        return $result;
    }

    function getNewsWithId($con, $table, $id)
    {
        $result = $con->query("SELECT * FROM  $table where id = " . $id . "");
        return $result;
    }

    function updateAdminData($con, $table, $firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd)
    {
        $sql = "UPDATE $table set firstname= '" . $firstname2 . "', gender='" . $gender2 . "', DateOfBirth='" . $dob2 . "', Religion='" . $Religion2 . "', PresentAddress='" . $PresentAddress2 . "', PermanentAddress='" . $PermanentAddress2 . "', phone='" . $phone2 . "', email='" . $email2 . "', pwd='" . $pwd . "' where username = '" . $username2 . "'";
        echo $sql;
        $result = $con->query($sql);
        echo $result;
        return $result;
    }
}
?>