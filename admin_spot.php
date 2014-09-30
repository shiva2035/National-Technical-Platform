<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	include("conn.php");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	$sl =0;
	$result = mysql_query("SELECT * FROM notice order by cid desc");
	$data = array();
	while($row = mysql_fetch_assoc($result)){
		$year = date("Y",strtotime($row['date']));
		$month = date("F",strtotime($row['date']));
		$data[$year][$month][] = $row;
	}
	echo "<br><fieldset}><legend><b><center>All Notices Archives</b></center></legend>";
	if(!(mysql_num_rows($result)>0))
	{
		echo "<center><font color=red><br><b>There are no Circulars Posted in here...</b><br><br></font></center>";
	}
	foreach ($data as $year => $month_array){
		if($year==date("Y"))
		{
			foreach ($month_array as $month => $dar){
				echo "<div><b>{$month}-{$year}</b></div><table class=\"table table-bordered table-hover\">";
				$pc=0;
				foreach($dar as $da)
				{
					$pc++;
					if(date("Y-m-d")==$da['date'])
					{
						$img = "<img src=images/hot.gif >";
					}
					else $img = "";
					echo '<tr><td align=center>'.$pc.'</td><td><a href="admin_viewCircular.php?circular='.$da["cid"].'">'.$da["title"].'</a>'.$img.'</td><td width=200>'.$da['date'].'</td><td>'.$da['time'].'</td></tr>';		
				}
				echo "</table><table>";
			}
		}
		//echo "</fieldset><br>";
	}
	//echo "</fieldset>";
?>
