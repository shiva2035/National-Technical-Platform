<?php
	session_start();
	require_once('head.php');
	//require_once('test.php');
	if($_GET['page']==""){header("location:index.php?page=home");}
	else $page=$_GET['page'];
	if(!isset($page))echo $page;
	if($page==null||$page==''){
	}
?>
<style>
#iframe
{
	background-color:white;
	width:100%;
	-webkit-min-height:800;
	height:460;
	//height:900;
	border-style:1px solid;
	border-left-style:groove;
	border-right-style:solid;
	border:0.2px;
}
#bottom2
{
	//margin-bottom:-125;
	text-align:center;
	vertical-align:middle;
	text-align:center;
	color:white;
	background-color:black;
	height:49;
	margin-left:-75;
	margin-right:-75;
	-webkit-margin-left:-100;
	-webkit-margin-right:-100;
}
</style>
<?php
$page= "$page.php";
echo "<div id=\"idiv\"><iframe src=\"$page\" id=\"iframe\"></iframe></div>";
?>
<div id="bottom2" valign=middle><br>Dept.of Computer Science and Engineering-2k8, (Best View in Firefox 3.4 or Above)<br><font size=2>website developer: Shiva Kumar K, RGUKT-Basar [shiva2035.iiit@gmail.com]</font></div>
