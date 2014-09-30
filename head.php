<link rel="icon" type="image/png" href="images/rgu.png">
<?php
if(array_key_exists("submit",$_POST))
{
	$uname=$_POST['uname'];
	$pass=$_POST['password'];
	include("conn.php");
	$submit=$_POST['submit'];
	setcookie("uname",$uname);
	require_once('member_check.php');
}

?><head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" href="css/bjqs.css">
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/boxOver.js"></script>
<script src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<script src="js/slider.js"></script>
<style type=text/css>
/* Main menu */
#menu li
{
	float:left;
	padding: 0 0 0 0;
	position: relative;
	background-color:none;
	
}
#menu li:hover
{
        background: -moz-linear-gradient(skyblue, teal);
        background: -webkit-linear-gradient(skyblue,teal);
}
#menu li:hover > ul
{
    display: block;
	background: -webkit-linear-gradient(skyblue,teal);
	background: -moz-linear-gradient(skyblue,teal);
}

/* Sub-menu */

#menu ul
{
    list-style: none;
    margin: 0;
    padding: 0;
    display: none;
    position: absolute;
    top: 50px;
    left: 0;
    z-index:999999;
    background:green;
}
#menu ul li
{
    float: none;
    margin: 0;
    padding: 0;
    display: block;
    //-moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
}
#menu ul a
{
    padding: 14px;
    height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}
#menu ul a:hover
{
        background: -moz-linear-gradient(skyblue, teal);
	background: -webkit-linear-gradient(skyblue,teal);
}
#public_panel
{
	background-color:teal;
	color:white;
	text-underline:none;
	height:25;
	text-align:right;
}
#public_panel a:visited
{
	background-color:black;
	color:white;
}
#public_panel a:hover
{
	background-color:black;
	color:white;
}
#public_panel a:active
{
	background-color:black;
	color:white;
}

</style>
<div id="main_container">
  <div id="public_panel">
  <h3><a href="index.php?page=home" id="hlink">Home</a> || <a href="" id="hlink">Notice Board</a></h3>
   </div>

  <div id="header">
    <div id="logo"> <a href=""><img src="images/rgu.png" alt="" border="0" width="366" height="142" /></a></div><br>
	<div class="top_divider_left"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
<!-----
<div class="oferte_content">      
   <div id="banner-fade">
        <ul class="bjqs">
		<li>
			<div class="oferta">
					<div class="oferta_content"> <img src="images/shiva1.png" width="94" height="100" alt="" border="0" class="oferta_img" />
					<div class="oferta_details">
					<div class="oferta_title">Samsung GX 2004 LM1</div>
					<div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div><a href="index.html" class="details">details</a> </div>
					</div>
			</div>
		</li>
		<li>
			<div class="oferta">
					<div class="oferta_content"> <img src="images/shiva2.png" width="94" height="100" alt="" border="0" class="oferta_img" />
					<div class="oferta_details">
					<div class="oferta_title">Samsung GX 2004 LM222222</div>
					<div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div><a href="index.html" class="details">details</a> </div>
					</div>
			</div>		
		</li>
		
        </ul>
    </div>
</div>
<!---------->

<?php
	//include("topScroller.php");
?>
	<div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu" id="menu">
        <li class="menu"><a href="index.php?page=home" class="nav1">Home</a></li>
        <li class="divider"></li>
<?php
if(isset($_SESSION['user']))
{
	$utype=$_SESSION['utype'];
	switch($utype)
	{
		//STUDENT_HOME
		case "student":
		{
		 ?>
			<li class="menu"><a href="index.php?page=projects.php?id=<?php echo $_SESSION['user'];?>" class = "nav2">My Projects</a></li>
			<li class="menu"><a href="index.php?page=forum" class = "nav2">NTP Forums</a></li>
			<li class="menu"><a href="index.php?page=stu_info" class="nav2"><?php echo $_SESSION['user'];?></a></li>
            <li class="menu"><a href="index.php?page=logout" class="nav2">Logout</a></li>
		<?php
		break;
		}
		//ADMIN_HOME
		case "admin":
		{ ?>
			<li class="menu"><a href="" class="nav2">View Proposals</a></li>
			<li class="menu"><a href="index.php?page=admin_spot" class="nav2">Notice Board</a>
			<ul>
				<li class="menu"><a href="index.php?page=admin_compose_notice" class="nav2">Compose Circular</a></li>
				<li class="menu"><a href="index.php?page=admin_edit_circ" class="nav2">Edit Circulars</a></li>
			</ul>
			</li>
			<li class="menu"><a href="index.php?page=stu_info" class="nav2"><?php echo $_SESSION['user'];?>-Admin User</a></li>			
            		<li class="menu"><a href="index.php?page=logout" class="nav2">Logout</a></li>
			
		<?php
		break;
		}
		//Faculty_HOME
		case "faculty":
		{
		?>
            		<li class="menu"><a href="index.php?page=logout" class="nav2">Logout</a></li>
		<?php
		break;
		}
	}
}
	else
	{ 
	?>
     <li class="menu"><a href="index.php?page=login" class="nav2">Login</a></li>       
    <?php
	}
	?>
 <!--   <li class="menu"><a href="index.php?page=notice" class="nav2">Notice Board</a></li>
	<li class = "menu"><a href="index.php?page=events" class="nav1">Events & Activities</a></li>
	<li class="menu"><a href="" class="nav2">About Us</a>
    <ul>
	<li class="menu"><a href="index.php?page=contact" class="nav2">Our Team</a></li>
	<li class="menu"><a href="index.php?page=contact" class="nav2">Contact Us</a></li>    
    </li>
    </ul>
	<li class="menu"><a href="index.php?page=contact" class="nav2">FAQ</a></li>-->
      </ul>	
      <div class="right_menu_corner"></div>
    </div>
