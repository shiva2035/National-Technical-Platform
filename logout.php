<?php
session_start();
$uname=$_SESSION['user'];
$x=session_destroy();
if($x)
{

echo "<br><center><div style=\"{background-color:skyblue;width:400;height:40px;}\">You have successfully Logged Out from NTP<br> Click here to <a href=\"login.php\">Login again</a></div></center>";
}
?>
