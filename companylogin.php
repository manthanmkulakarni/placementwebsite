<!DOCTYPE html>
<html>
<body>

Signup
<form action="companysignup.php" method="post" name="signupform">
    <br>User ID <br>
    <input type="text" name="userid" required>
    <br>Company name <br>
    <input type="text" name="companyname" required>
    <br> Password <br>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit">
</form>
<br>
<br>
Login

<form action="companyportal.php" method="post" name="loginform">
    <br>User ID <br>
    <input type="text" name="userid" required>
    <br> Password <br>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit">
</form>

</body>
</html>