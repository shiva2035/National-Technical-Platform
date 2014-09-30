<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once("checkAccess.php");
	include("conn.php");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div>";
	echo "<br><br><center><b>All Notices Archives</b>";
	$sl =0;
	echo "<table class=\"table table-bordered table-hover\" style=\"{margin-left:75px;}\">";
	echo "<tr><th>Sl.No</th><th>Circular</th><th>Time</th><th>Date of Post</th><th>Edit</th><th>Delete</th></tr>";
	while($row=mysql_fetch_array($q2))
	{
		$sl = $sl+1;
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<tr><td align=center>$sl</td><td><a href=\"admin_viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></td><td align=center>".$row['time']."</td><td align=center>$date</td><td align=center><a href=\"admin_updateCircular.php?cid=".$row['cid']."\"><img src=\"images/edit.png\"></a></td><td align=center><a href=\"admin_deleteCirc.php?circular=". $row['cid'] ."\"><img src=\"images/no.png\" id=img></a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
?>
