<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="../css/Signin.css">
</head>
   <body class="bg-color">
   <?php 
      require('../view/EHeader.php') 
    ?>
   <h2>Editor</h2>

    <form action="../control/ELoginAction.php" method="post">

       Username: <input type="text" name="username">
       <br><br>
	   Password: <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit" value="Login">
       <br>

    </form>
    <br>

    <a href="../view/EForgotPass.php">Forgot Password</a>
    <br><br>

    Not registered yet? <a href="../view/ERegistration.php">Click here</a> for registration.

    <br><br>

    <?php
       require('../view/EFooter.php'); 
   ?>
</body>
</html>