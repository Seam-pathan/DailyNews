<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="../css/Login.css">
   <script src="../js/LoginValidation.js"></script>
</head>

<body class="bg-color">
   <div class="login">
      <?php require('AHeader.php')  ?>
      <h1 class="admin">Admin</h1>


      <form class="Lform" action="../control/ALoginAction.php" OnSubmit="return validateLogins()" method="post">

         <lable>Username:</lable>
         <input type="text" id="username" name="username">
         <br><br>

         <lable for="pwd">Password:</lable>
         <input type="password" id="pwd" name="pwd">
         <br><br>

         <input class="Sbtn" type="submit" name="submit" value="Login">
         <br>

      </form>
      <br>


      <!-- <a href="AForgotPass.php">Forgot Password</a>
      <br><br> -->

      Not registered yet? <a href="ARegistration.php">Click here</a> for registration.
      <br><br>

      <a class="Sbtn" href="../index.php">Back</a>
      <br><br>
      <?php require('AFooter.php'); ?>
   </div>
</body>

</html>