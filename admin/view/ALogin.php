
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="../css/Login.css">
   <script src="../js/LoginValidation.js"></script>
</head>
<body class="bg-color">
<?php require('AHeader.php')  ?>
   <h1>Admin</h1>

    <form action="../control/ALoginAction.php" OnSubmit="return validateLogins()" method="post">

       Username: <input type="text"id="username" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit" value="Login">
       <br>

    </form>
    <br>


    <a href="AForgotPass.php">Forgot Password</a>
    <br><br>

    Not registered yet? <a href="ARegistration.php">Click here</a> for registration.
    <br><br>

    <a href="../index.php">Back</a>
    <br><br>
    <?php require('AFooter.php'); ?>
</body>
</html>