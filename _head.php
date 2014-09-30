<title>-::National Technical Platform- My Nation My Technology::-</title>
<link rel="icon" href="images/rgu.png" type="image/x-icon" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<style type = "text/css">
body
{
	margin:0 125 125;
	background-color:#F8F8F8;
}
#header
{
	align:center;
	margin-top:20;
	-webkit-margin-top:20;
	text-align:right;
	vertical-align:middle;
	//background-color:darkblue;
	background-color:teal;
	color:white;
}
#head_div
{
	background-image:url("images/head.jpg");
	height:110;
}
</style>
<div id="head_div"><table><tr><td width=580><img src="images/rgu.png" style={float:left;} /></td><td><font size=6 color=teal><b>National Technical Platform</b></font><br><font size=4 color=gray style={float:right;}>My Nation- My Technology</font></td></tr></table>
</div>
<div id="header">
	<ul id="menu">
	<li><a href="index.php?page=home" id="hlink">Home</a></li>
	<li><a href="" id="hlink">Notice Board</a>
	<ul>
	<li><a href="index.php?page=admin_spot" id="hlink">Notice Board</a></li>
	<li><a href="index.php?page=time_table" id="hlink">Time Tables</a></li>
	</ul>
	</li>
	
<?php if(isset($_SESSION['user']))
{
	$utype=$_SESSION['utype'];
	switch($utype)
	{
		//STUDENT_HOME
		case "student":
		{ ?>
		<li><a href="" id="hlink">Attendance</a>
		<ul>
			<li><a href="index.php?page=stuAttd_today">Today's Report</a></li>
			<li><a href="index.php?page=stuAttd_monthly">Monthly Report</a></li>			
		</ul>
		</li>					
		<li><a href="index.php?page=viewPDF.php?id=<?php echo $_SESSION['user'];?>" id="hlink">Your CV</a></li>
		<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=admin_viewStud"><?php echo $_SESSION['user'];?></a>
			<ul>
			<li><a href="index.php?page=admin_viewStud">View Profile</a></li>
			<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
			<!--<li><a href="index.php?page=update_profile" id="hlink">Update Profile</a></li>-->
			<li><a href="logout.php" id="hlink">Logout</a></li>	
			</ul>
		</li>
		<?php
		break;
		}
		//ADMIN_HOME
		case "admin":
		{ ?>
			<li><a href="" id="hlink">Search</a>
			<ul>
				<li><a href="index.php?page=admin_searchFac">Search Faculty</a></li>
				<li><a href="index.php?page=admin_searchStud">Search Student</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=upload_tt" id="hlink">Upload Time Tables</a></li>
			<li><a href="" id="hlink">Attendance</a>
			<ul>
				<li><a href="index.php?page=admin_createAttd">Create This Month's Attendance Sheet</a></li>
				<li><a href="">View Student Attendance Report</a></li>
				<li><a href="">View Course wise Attendance</a></li>
				<li><a href="">Create Register</a></li>
			</ul>			
			</li>			
			<li><a href="" id="hlink">Circulars</a>
			<ul>
			<li><a href="index.php?page=admin_compose_notice" id="hlink">Compose New Circular</a></li>
			<li><a href="index.php?page=admin_edit_circ" id="hlink">View and Edit Circulars</a></li>
			</ul>
			</li>
			<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_info"><?php echo $_SESSION['user'];?></a>
				<ul>
				<li><a href="index.php?page=admin_prof">View Profile</a></li>
				<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
				<!--<li><a href="index.php?page=update_profile" id="hlink">Update Profile</a></li>-->
				<li><a href="logout.php" id="hlink">Logout</a></li>	
				</ul>
			</li>			
		<?php
		break;
		}
		//Faculty_HOME
		case "faculty":
		{ ?>
			<li><a href="" id="hlink">Student Attendance</a>
			<ul>
				<li><a href="index.php?page=fac_submitAttd" id="hlink">Submit Student Attendance</a></li>
				<li><a href="index.php?page=fac_modAttd" id="hlink">Modify Student Attendance</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_searchStud">Find Student</a></li>
			<li><a href="index.php?page=viewPDF.php?id=<?php echo $_SESSION['user'];?>" id="hlink">Your CV</a></li>
			<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_viewFac" id="hlink"><?php echo $_SESSION['user'];?></a>
				<ul>
				<li><a href="index.php?page=admin_viewFac" id="hlink">View Profile</a></li>
				<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
				<!--<li><a href="" id="hlink">Update Profile</a></li>-->
				<li><a href="logout.php" id="hlink">Logout</a></li>	
				</ul>
			</li>	
		<?php
		break;
		}
	}
}
	else
	{ ?>
	<li><a href="index.php?page=login">Login</a>
	<ul>
	<li><a href="index.php?page=admin_addFac">Faculty Registration</a></li>
	<li><a href="index.php?page=admin_addStud">Student Registration</a></li>
	</ul>
	</li>
	<?php
	}
	?>
	</ul>
</div>
