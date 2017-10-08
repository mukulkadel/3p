<?php
session_start();

//admin check & login check
if(!isset($_SESSION["admin"])||!isset($_SESSION["email"]))
  header("location:../login.php");
$text1=$_POST['text1'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];
$text4=$_POST['text4'];
$text5=$_POST['text5'];
$text6=$_POST['text6'];

?>


<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>PDS</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../files/css/bootstrap.css">
	<link rel="stylesheet" href="../files/css/animate.css">
	<link rel="stylesheet" href="../files/css/simple-line-icons.css">
	<link rel="stylesheet" href="../files/css/font-awesome.min.css">
	<link rel="stylesheet" href="../files/css/style.css">
	<link rel="stylesheet" href="../files/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>


	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="../index.php"><img src="../logopds.png" width="130px"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li><a href="../acadmic/index.php" class="has-submenu">Academic</a>
										<ul class="sub-menu">
											<li><a href="../acadmic/planning.php">Planning</a></li>

											<li><a href="../acadmic/syllabus.php">syllabus</a></li>
											   <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>

										</ul>
									</li>
									<li><a href="#" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
										<li><a href="../recruiters/gallery.php">Gallery</a></li>
    									<li><a href="../recruiters/present.php">Present</a></li>
    									<li><a href="../recruiters/upcoming.php">Upcoming recruiters</a></li>
										</ul>
									</li>
									<li><a href="../aboutus/about.php">About us</a></li>
									<li><a href="#" class="has-submenu">placement</a>
										<ul class="sub-menu">
											<li><a href="../placement/activity.php"> Activities</a></li>
											<li><a href="../placement/current.php">current</a></li>
											<li><a href="../placement/previous1year.php">previous 1 year</a></li>

										</ul>
									</li>
									<li><a href="../contactus/contact.php">Contact us</a></li>
									<li><a href="../internship/internship.php">Internship</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>


<section class="contact-map-wrapper">




<div id="card">


				<center>	<h3>POORNIMA FOUNDATION</h3>
<h3>Poornima Mission for Training Placement and Outreach</h3>
<h3>REPORT OF  <?php echo $text1; ?> RECRUITMENT DRIVE:-<br/><br/></h3></center>

<h5>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $text1; ?> has visited Poornima Fondatation on <?php echo $text2; ?>  .

 <br/>&nbsp;&nbsp;&nbsp;&nbsp;
 Maximum <?php echo $text3; ?>  from department of Computer Engineering were eligible. <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;
 The procedures of selection was as follows:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;
1. Pre-placement talk<br/>
&nbsp;&nbsp;&nbsp;&nbsp;
2. Written Test (Technical & Aptitude) - 1 Hour<br/>
&nbsp;&nbsp;&nbsp;&nbsp;
3. Interviews - Technical & HR<br/><br/>

&nbsp;&nbsp;->&nbsp;
<?php echo $text4; ?>  had cleared the 1st round (Aptitude).
 <br/>&nbsp;&nbsp;->&nbsp;
 <?php echo $text5; ?> had appeared in the Final Interview round.
 <br/>&nbsp;&nbsp;->&nbsp;
 <?php echo $text6; ?>  had been selected by the <?php echo $text1; ?>.
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;
Department of Computer Engineering congratulates the following students for the endeavor and wishes Best of Luck for their future.</h5>



<!--Student table-->

	<table class="m_-1171728942008675527m_1788991688362864427m_6746889528198116083gmail-MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="765" style="width:574pt;margin-left:4.65pt;border-collapse:collapse">
<tbody><tr style="height:53.25pt">
<td width="55" nowrap="" style="width:41.55pt;border:1pt solid windowtext;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">S. No.<span></span></span></b></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">Reg. No.<span></span></span></b></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">Name of Student<span></span></span></b></p>
</td>
<td width="78" style="width:58.2pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">Gender<span></span></span></b></p>
</td>
<td width="76" style="width:57.35pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">Branch<span></span></span></b></p>
</td>
<td width="86" style="width:64.2pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">Section<span></span></span></b></p>
</td>
<td width="79" style="width:59.15pt;border-top:1pt solid windowtext;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:none;background:rgb(23,55,93);padding:0in 5.4pt;height:53.25pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><b><span style="font-size:10pt;font-family:verdana,sans-serif;color:white">College<span></span></span></b></p>
</td>
</tr>
<tr style="height:12.75pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">1<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CE/13/502<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ADITYA SAXENA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.75pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CE/13/120<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ANNU SHARMA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CE/13/070<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SAHIL GUPTA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">4<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CE/13/150<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SHASHANK SHARMA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">5<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CE/13/522<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VIKAS VATS<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">6<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CIV/13/501<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ABHISHEK UDAIWAL<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">7<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CIV/13/006<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ANUJ MATHUR <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">8<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CIV/13/056<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">GAURAV GUPTA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">9<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CIV/13/052<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MONALISA JENA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">10<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/CIV/13/063<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NIMISH GAUR <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">11<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EC/13/010<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AKASH GOYAL <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">12<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EC/13/111<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AKSHAY CHOUDHARY <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">13<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EC/13/506<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">GANESH KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">14<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EC/13/511<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MUKESH KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">15<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EC/13/108<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VIVEK BHARTI <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">16<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EC/13/008<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ANKITA JAIN <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">17<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EC/13/543<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">TEENA KUMAWAT<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">18<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EC/13/544<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VAISHALI JAIN<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">19<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/502<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AADITYA KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">20<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/039<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">DEEPENDRAPRATAP SINGH SISODIYA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">21<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/045<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">HARI SINGH NITHARWAL <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">22<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/189<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">HARSHUL KUMAR KANTIYA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">23<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/522<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">KUMARI KOMAL GUPTA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">24<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/083<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NIKITA SHARMA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">25<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/214<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PRATEEK BAGARI <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">26<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/098<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PRINCE JAIN <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">27<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EE/13/152<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VINOD SWAMI <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">28<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EE/13/302<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AKHIL JANGIR <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">D<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">29<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EE/13/512<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">LEKHRAJ SHARMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">D<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">30<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EE/13/063<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NIKHIL KUMAR SONI <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">D<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">31<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PANKAJ KUMAWAT <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">D<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">32<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/EE/13/520<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ROHAN KUMAWAT<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">D<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">33<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/EIC/13/508<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NEHA ARORA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EIC<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NA<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">34<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/IT/13/023<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MEGHA AGRAWAL <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">IT<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NA<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">35<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/IT/13/030<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NIKHIL MALOO <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">IT<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NA<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">36<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/ME/13/520<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">BHARAT BHUSHAN<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">37<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE/ME/14/706/D<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAHUL SHARMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">38<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/ME/13/014<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">KAMLESH KUMAR MEGHWAL <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">39<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/ME/13/514<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NEERAJ SOURAV<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">40<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE2/ME/13/075<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAJAT VAISHNAV <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">C<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PCE<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">41<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/018<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">BHEEM SINGH MEENA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">42<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/515<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">DAMODAR SHARMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">43<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/045<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MANISH KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">44<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/049<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MOHMMAD SAJID<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">45<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/556<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAVI RAJ<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">46<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/CIV/13/566<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">TARUN PARIHAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">47<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/003<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ABHISHEK SHARMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">48<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/534<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MANISH SHARMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">49<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/539<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NEERAJ<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">50<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/071<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAHUL VYAS<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">51<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/545<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAJESH KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">52<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/110<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RONAK KUMAR BHOI<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">53<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/089<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SHIV DUTT VYAS<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">54<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI/ME/13/104<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VISHAL VERMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PGI<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">55<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/015<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AYUSH GOYAL <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">56<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/526<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">KHUSHWANT SAHAY<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">57<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/532<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MEGHA VERMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">58<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/539<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NEHAL GARG<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">59<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/541<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PRIYANKA LADHANI<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">60<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CE/13/554<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SWASTIKA DAYAL<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">61<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/CIV/13/140<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">RAMESH KUMAR <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL <span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">62<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/EC/13/013<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">APURVA SHARMA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">63<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/EC/13/512<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CHITRA VERMA<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">64<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/EC/13/533<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MOHD AMAAN MOLANI<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">65<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/EC/13/543<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">POOJA GAUTAM<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Female<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ECE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">66<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET/EE/13/031<span></span></span></p>
</td>
<td width="205" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">KULSHRESTHA GUPTA <span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">S<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PIET<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">67<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2014PUSOMBBXX02546<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NISHCHAY TRIPATHI<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">BBA<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NA<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">68<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2014PUSETBCVX02663<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ABHINAV TAK<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MALE<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">CIVIL<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT CV-B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">69<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBEEX02125<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">HIMANSHU SHAH<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT EE<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">70<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBEEX01924<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">VISHWAS KHANDAL<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">EE<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT EE<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">71<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2015PUSOMMBXX04029<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SUMAN SAURABH<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">M<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">MBA<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NA<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">72<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBMEX02183<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AKSHAY KUMAR KASLIWAL<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT ME-A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">73<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBMEX02357<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">AMAN KHAN PANWAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT ME-A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">74<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBMEX02197<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ANKUR JAIN<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT ME-A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">75<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBMEX02130<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">NIRBHIK BHATT<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT ME-A<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">76<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">2013PUSETBMEX02352<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">SUMIT KUMAR<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Male<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">ME<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">3BT ME-B<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">PU<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">77<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Avibhav Aggarwal<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">78<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Manoj Kumar<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">79<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Apoorv Basniwal<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">80<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Aditya Singh<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">81<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Himanshu Singh<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
<tr style="height:12.95pt">
<td width="55" nowrap="" style="width:41.55pt;border-right:1pt solid windowtext;border-bottom:1pt solid windowtext;border-left:1pt solid windowtext;border-top:none;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">82<span></span></span></p>
</td>
<td width="186" nowrap="" style="width:139.85pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="205" nowrap="" style="width:153.7pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" style="margin-bottom:0.0001pt;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">Narendra Moyal<span></span></span></p>
</td>
<td width="78" nowrap="" style="width:58.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="76" nowrap="" style="width:57.35pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="86" nowrap="" style="width:64.2pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
<td width="79" nowrap="" style="width:59.15pt;border-top:none;border-left:none;border-bottom:1pt solid windowtext;border-right:1pt solid windowtext;padding:0in 5.4pt;height:12.95pt">
<p class="MsoNormal" align="center" style="margin-bottom:0.0001pt;text-align:center;line-height:normal"><span style="font-size:10pt;font-family:verdana,sans-serif;color:black">&nbsp;<span></span></span></p>
</td>
</tr>
</tbody></table>


			    </div>



</section>



   <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="../index.php">
             <img src="../logopds.png" width="130px"></a>
          </h1>
          <p>©2017 PDS. All rights reserved.</p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Some pages</h4>
            <ul>
               <li><a href="#">login</a></li>

              <li><a href="../index.php">Home</a></li>
              <li><a href="../aboutus/about.php">aboutus</a></li>
               <li><a href="../contactus/contact.php">Contact us</a></li>
              <li><a href="../internship/internship.php">internship</a></li>



            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>placement</h4>
            <ul>
              <li><a href="../acadmic/planning.php">planning</a></li>
              <li><a href="../acadmic/syllabus.php">syllabus</a></li>
              <li><a href="../placement/activity.php">Placement Activities</a></li>
              <li><a href="../placement/current.php">current</a></li>
              <li><a href="../placement/previous1year.php">previous one year</a></li>

            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
           <div class="links">
          <h4>recruiters</h4>
           <ul>
              <li><a href="../recruiters/gallery.php">gallery</a></li>
              <li><a href="../recruiters/present.php">present</a></li>
              <li><a href="../recruiters/upcoming.php">upcoming</a></li>

            </ul>

    </footer>

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li class="menu-item-has-children"><a href="../acadmic/index.php" >Acadmic</a>
								<ul class="sub-menu">
										<li><a href="../acadmic/planning.php">Planning</a></li>
										<li><a href="../acadmic/syllabus.php">syllabus</a></li>
										   <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>
										</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Recruiters</a>
								<ul class="sub-menu">
									<li><a href="../recruiters/gallery.php">Gallery</a></li>
									<li><a href="../recruiters/
									.php">present</a></li>
									<li><a href="../recruiters/upcoming.php">upcoming recruiters</a></li>
								</ul>
							</li>
							<li><a href="aboutus/about.php">About us</a></li>
							<li class="menu-item-has-children"><a href="#">placement</a>
								<ul class="sub-menu">
									<li><a href="../placement/activity.php">Placement Activities</a></li>
									<li><a href="../placement/current.php">current</a></li>
									<li><a href="../placement/previous1year.php">previous 1 year</a></li>

								</ul>
							</li>
							<li><a href="../contactus/contact.php">Contact us</a></li>
							<li><a href="../internship/internship.php">Internship</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>




	<script type="text/javascript" src="../files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="../files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="../files/js/plugins.js"></script>
	<script type="text/javascript" src="../files/js/custom.js"></script>

	<!-- Google Map -->


</body>


</html>
