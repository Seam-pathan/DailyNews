<?php 
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","test");
if($con->connect_error)
{
    die("Failed to connect: ".$con->connect_error);
}
else
{
    $stmt = $con->prepare("select * from editor_info where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $pwd)
         {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: ../view/EHome.php?username=" . $username);
        }
        else
        {
            echo "<h2>Invalid username or password</h2>";
        }
    }
    else
    {
        echo "<h3>Invalid username or password</h3>";
    }
}
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Action</title>
</head>
<body>

    <a href="../view/ELogin.php">Login</a> | <a href="../view/ERegistration.php">Registration</a>

</body>
</html>
