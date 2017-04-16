<?php
include_once '../check.php';

//admin check
if(isset($_SESSION["admin"]))
  header("location:../login.php");

?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Home | PDS</title>


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
								<a href="../index.php">PDS</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li><a href="./index.php">Show Details</a></li>
									<li><a href="../internship/internship.php">Internship</a></li>
                  <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

        <section id="details" class="container-fluid" style="margin-top:80px;">
            <div class="col-md-2" style="margin-top:10px;">
              <div class="row">Registration no: <?php echo $_SESSION['reg_no']; ?></div>
              <div class="row">Name: <?php echo $_SESSION['name']; ?></div>
              <div class="row">Email: <?php echo $_SESSION['email']; ?></div>
              <div class="row" style="margin-top:40px;">
              <ul style="list-style-type:none;">
                <li><a href="./index.php" style="color:#ff0000;">Show Details</a></li>
                  <li><a href="./update.php">Update</a></li>
                <li><a href="./requests.php">Requests</a></li>
              </ul>
              </div>
            </div>
            <div class="col-md-10">
              <div>
                <button id="personal" class="btn btn-default">Personal</button>
                <button id="professional" class="btn btn-default">Professional</button>
                <button id="placement" class="btn btn-default">Placement</button>
              </div>
              <div>
                <div id="output" style=""></div>
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
             PDS
            </a>
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
              <li><a href="#">Show Details</a></li>
              <li><a href="../internship/internship.php">Internship</a></li>
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


  <!--  ajax calls for data-->
  <script>
      $(document).ready(function(){
        $("#personal").click(function(){
            $("#personal").attr("class","btn");
            $("#professional").attr("class","btn btn-default");
            $("#placement").attr("class","btn btn-default");
          $.ajax({
            type:'post',
            url:'ajax.php',
            data:{action:'personal'},
            success:function(out){
              $("#output").html(out);
            }
          });
        });
          $("#professional").click(function(){
              $("#personal").attr("class","btn btn-default");
              $("#professional").attr("class","btn");
              $("#placement").attr("class","btn btn-default");
            $.ajax({
              type:'post',
              url:'ajax.php',
              data:{action:'professional'},
              success:function(out){
                $("#output").html(out);
              }
            });
          });
            $("#placement").click(function(){
                $("#personal").attr("class","btn btn-default");
                $("#professional").attr("class","btn btn-default");
                $("#placement").attr("class","btn");
              $.ajax({
                type:'post',
                url:'ajax.php',
                data:{action:'placement'},
                success:function(out){
                  $("#output").html(out);
                }
              });
            });

          $("#personal").click();
      });
      function logout(){
        window.location="../logout.php"
      }
    </script>

</body>
</html>
