<?php
session_start();
?>
<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
if(array_key_exists("submit",$_POST))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$type=$_POST['type'];
	include("conn.php");
	$submit=$_POST['submit'];
	setcookie("uname",$uname);
	require_once('member_check.php');
}
else
{
	if(!isset($_SESSION['user']))
	{
		//include("head.php");
	?>
<?php
{
?><br>
<fieldset>
<form action="" method="post" class="form-group">
<br>
<table align=center>
<tr><td></td><td><font face="sans-serif" size="8pt">RGUKT-B</font><hr></td></tr>
<tr><td>Username: </td><td><input type="text" name="uname" id="input"></td></tr>
<tr><td>Password: </td><td><input type="password" name="pass" id="input"></td></tr>
<tr><td>Who are You?: </td><td><select name="type"><option value="Select">Select Type of User</option><option value="student">Student</option><option value="faculty">Faculty</option><option value="admin">Administration</option></select></td></tr>
<tr><td></td><td><input type="reset" value="Reset" class="btn btn-warning">&nbsp;&nbsp;<input type="submit" value="submit" name="submit" class="btn btn-success"></td></tr>
</form>
</table><br />
<center>Do not have account? Click here to <a href="register.php">SignUp</a></center>
</fieldset>
</body>
</html>
<?php
}
}
else
{
	header("location:home.php");
}

}
?>