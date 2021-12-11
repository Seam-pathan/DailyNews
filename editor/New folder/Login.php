<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
</head>
<body>
   <h1>Admin</h1>

    <form action="LoginAction.php" method="post">

       Username: <input type="text" name="username">
       <br><br>

       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit" value="Login">

       <!-- <input type="button" href=".\ForgotPass.php" name="Fpass" value="Forget Password"> -->

       <br>

    </form>
    <br>

    <a href="ForgotPass.php">Forgot Password</a>
    <br><br>

    Not registered yet? <a href="Registration.php">Click here</a> for registration.
</body>
</html>