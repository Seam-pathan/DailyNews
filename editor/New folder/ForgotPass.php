<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Password</title>
</head>
<body>
   <h1>Update Password</h1>

    <form action="ForgotPassAction.php" method="post">

	   Username: <input type="text" name="username">
       <br><br>



       <lable for="pwd">Password:</lable>
       <input type="password"id="pwd" name="pwd">
       <br><br>

	   <lable for="pwd">New Password:</lable>
       <input type="password"id="pwd2" name="pwd2">
       <br><br>
	   
	   <lable for="pwd">Confirm Password:</lable>
       <input type="password"id="pwd3" name="pwd3">
       <br><br>

       <input type="submit" name="submit" value="submit">

       <!-- <input type="button" href=".\ForgotPass.php" name="Fpass" value="Forget Password"> -->

       <br>

    </form>
    <br>

</body>
</html>