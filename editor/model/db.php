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
    

    function addUser($table, $firstname, $lastname, $gender, $DateOfBirth, $Religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $pwd)
    {
        $connection = new db();
        $conn = $connection->OpenCon();
        if ($conn->connect_error) {
            die('Connection Failed : ' . $conn->connect_error);
        }
        $sql = "INSERT INTO " . $table . " (firstname, lastname, gender, dob, religion, PresentAddress, PermanentAddress, phone, email, username, password)
values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $firstname, $lastname, $gender, $DateOfBirth, $Religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $pwd);
        $res = $stmt->execute();
        if ($res) {
            echo "registration successfully.....";
        } else {
            echo "Failed";
        }
        $conn->close();
    }

    function checkUserExists($table, $username)
    {

        $connection = new db();
        $con = $connection->OpenCon();
        $userQuery = $con->query("SELECT * FROM " . $table . " WHERE username='" . $username . "'");
        if ($userQuery->num_rows > 0) {
            return true;
        } else {
            return false;
        }
        $connection->CloseCon($con);
    }
    function getPendingSignupRequest($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'");
        return $result;
    }

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
    function getAllUser($con, $table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'approved'");
        return $result;
    }

    function update_user_status($con, $table, $username, $status)
    {
        $sql = "update " . $table . " set status = '" . $status . "' where username = '" . $username . "'";
        $result = $con->query($sql);
        return $result;
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

    function updateEditorData($con, $table, $firstname2, $gender2, $dob2, $Religion2, $PresentAddress2, $PermanentAddress2, $phone2, $email2,  $username2, $pwd)
    {
        $sql = "UPDATE $table set firstname= '" . $firstname2 . "', gender='" . $gender2 . "', dob='" . $dob2 . "', religion='" . $Religion2 . "', PresentAddress='" . $PresentAddress2 . "', PermanentAddress='" . $PermanentAddress2 . "', phone='" . $phone2 . "', email='" . $email2 . "', password='" . $pwd . "' where username = '" . $username2 . "'";
        $result = $con->query($sql);
        return $result;
    }

    function ForgetPass($con, $table, $username, $pwd)
    {
        $sql = "update " . $table . " set pwd = '" . $pwd . "' where username = '" . $username . "'";
        $result = $con->query($sql);
        return $result;
    }
}
