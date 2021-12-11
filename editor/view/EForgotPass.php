<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Password</title>
</head>
<body>
   <h1>Update Password</h1>

    <form action="../control/EForgotPassAction.php" method="post">

	   Username: <input type="text" name="username">
       <br><br>
       Old Password: <input type="password"id="pwd" name="pwd">
       <br><br>
	   New Password: <input type="password"id="pwd2" name="pwd2">
       <br><br>
	   Confirm Password: <input type="password"id="pwd3" name="pwd3">
       <br><br>

       <input type="submit" name="submit" value="submit">

       <br>

    </form>

</body>
</html>