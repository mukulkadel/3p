<?php

session_start();

//admin check & login check
if(!isset($_SESSION["admin"])||!isset($_SESSION["email"]))
  header("location:../login.php");

?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>

 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Upload Student Details</title>


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
                  <li><a href="./index.php">Search</a></li>
                  <li><a href="./uploadData.php">Upload</a></li>
                  <li><a href="./requests.php">Requests</a></li>
                  <li><a href="./addAdmins.php">Admins</a></li>
									<li><a href="../placement/index.php" class="has-submenu">Placement</a>
										<ul class="sub-menu">
										<li><a href="../placement/activity.php">Activities</a></li>
											<li><a href="../placement/current.php">Current</a></li>
											<li><a href="../placement/previous1year.php">Previous 1 year</a></li>
										</ul>
									</li>
									<li><a href="../internship/index.php" class="has-submenu">Internship</a>
										<ul class="sub-menu">
											<li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
											<li><a href="../internship/Foreign_internship.php">Foreign Internship</a></li>
											<li><a href="../internship/internship_details.php">Internship Details</a></li>
										</ul>
									</li>
                  <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>


				<section class="contact-map-wrapper">
          <div class="container" style="/*box-shadow: 10px 10px -5px #888888;*/">
            <div class="container-fluid">
              <div class="col-md-2"></div>
              <form method="post" enctype="multipart/form-data" action="pupload.php">
                <input type="file" name="file" class="col-md-6"/>
                <input type="submit" value="Upload" name="submit" class="col-md-2"/>
              </form>
              <div class="col-md-2"></div>
            </div>
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
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../aboutus/index.php">About us</a></li>
                   <li><a href="../contactus/index.php">Contact us</a></li>
                  <li><a href="../internship/index.php">Internship</a></li>



                </ul>
              </div>
              <div class="spacing"></div>
            </div>
            <div class="col-md-3">
              <div class="spacing"></div>
              <div class="links">
                <h4>Placement</h4>
                <ul>
                  <li><a href="../acadmic/planning.php">Planning</a></li>
                  <li><a href="../acadmic/syllabus.php">Syllabus</a></li>
                  <li><a href="../placement/activity.php">Placement Activities</a></li>
                  <li><a href="../placement/index.php">Current</a></li>
                  <li><a href="../placement/previous1year.php">Previous one year</a></li>

                </ul>
              </div>
              <div class="spacing"></div>
            </div>
            <div class="col-md-3">
              <div class="spacing"></div>
               <div class="links">
              <h4>Recruiters</h4>
               <ul>
                  <li><a href="../recruiters/gallery.php">Gallery</a></li>
                  <li><a href="../recruiters/index.php">Present</a></li>
                  <li><a href="../recruiters/upcoming.php">Upcoming</a></li>

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
              <li><a href="./index.php">Search</a></li>
              <li><a href="./uploadData.php">Upload</a></li>
              <li><a href="./requests.php">Requests</a></li>
              <li><a href="./addAdmins.php">Admins</a></li>
              <li><a href="../placement/index.php" class="has-submenu">Placement</a>
                <ul class="sub-menu">
                <li><a href="../placement/activity.php">Activities</a></li>
                  <li><a href="../placement/current.php">Current</a></li>
                  <li><a href="../placement/previous1year.php">Previous 1 year</a></li>
                </ul>
              </li>
              <li><a href="../internship/index.php" class="has-submenu">Internship</a>
                <ul class="sub-menu">
                  <li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
                  <li><a href="../internship/Foreign_internship.php">Foreign Internship</a></li>
                  <li><a href="../internship/internship_details.php">Internship Details</a></li>
                </ul>
              </li>
              <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
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


	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <script type="text/javascript">
   function logout(){
     window.location="../logout.php"
   }
   </script>


</body>
</html>
