<marquee direction="up" onmouseover="stop()"onmouseout="start()" title="Latest Updates and Hilights">
<?php
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div id=\"menus\"><ul>";
	while($row=mysql_fetch_array($q2))
	{
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<li><font size=2><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></font><br><font size=1.5>".$date.",".$row['time']."</li>";
	}
	echo "</ul></div>";
?>
</marquee>
