<?php
//Include GP config file && User class
include_once '../check.php';

function loginButton($part){
	global $authUrl;
	$output="";
	if($part==0){
		if(isset($_SESSION["email"])){					//logined
			if(!isset($_SESSION["admin"])){
				$output.="<li><a href=\"../home/\">Show Details</a></li>\n";
			}
			elseif(isset($_SESSION["admin"])){
				$output.="<li><a href=\"../admin/\">Search</a></li>\n";
			}
			$output.="<li><button class=\"btn btn-info btn-lg\" onclick=\"logout()\">Log out</button></li>\n";
		}
		elseif(!isset($_SESSION["email"])){
			$output.="<li><button class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#login\">Log in</button></li>\n";
		}
	}
	else{
		if(isset($_SESSION["email"])){
			$output.="<script>\nfunction logout(){\nwindow.location=\"../logout.php\";\n}\n</script>\n";
		}
		else{
			$output.="<div id=\"login\" class=\"modal fade\" role=\"dialog\" style=\"margin-top:100px;\">";
					$output.="<div class=\"modal-dialog\">";

						$output.="<!-- Modal content-->";
						$output.="<div class=\"modal-content\">";
							$output.="<div class=\"modal-header\">";
							$output.="	<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
							$output.="	<h4 class=\"modal-title\">Login with Google+</h4>";
							$output.="</div>";
							$output.="<div class=\"modal-body\">";
								$output.="<p><center>";
								$output.="	<a class=\"btn btn-block btn-social btn-google\" style=\"background-color:#DD4B39;color:#ffffff;width:200px;\" href=\"".filter_var($authUrl, FILTER_SANITIZE_URL)."\">";
								$output.="		<span class=\"fa fa-google\"></span> Sign in with Google";
								$output.="	</a>";
							$output.="</center> </p>";
							$output.="</div>";
							$output.="<div class=\"modal-footer\">";
							$output.="	<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
						$output.="	</div>";
						$output.="</div>";
				$output.="</div>";
			$output.="</div>";
		}
	}
	return $output;
}

?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Contact us | PDS</title>


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

	<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto" rel="stylesheet">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/compiled.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<link href="css/prism.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link href="style.css" rel="stylesheet">
		
		
		

        <style type="text/css">
			img.wp-smiley,
			img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 1em !important;
			}
		

</style>

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
                  <li><a href="../acadmic/index.php" class="has-submenu">Acadmic</a>
                      <ul class="sub-menu">
                      <li><a href="../acadmic/planning.php">Planning</a></li>

                      <li><a href="../acadmic/syllabus.php">Syllabus</a></li>

                                 <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>
                    </ul>
                  </li>
                  <li><a href="../recruiters/index.php" class="has-submenu">Recruiters</a>
                    <ul class="sub-menu">
                    <li><a href="../recruiters/eminent receuiters.php">Eminent Receuiters</a></li>
                                            <li><a href="../recruiters/gallery.php">Gallery</a></li>
                                            <li><a href="../recruiters/present.php">Present</a></li>
                                            <li><a href="../recruiters/upcoming.php">Upcoming </a></li>
                    </ul>
                  </li>
                  <li><a href="../aboutus/index.php">About us</a></li>
                  <li><a href="../placement/index.php" class="has-submenu">Placement</a>
                    <ul class="sub-menu">

                    <li><a href="../placement/activity.php">Activities</a></li>
                      <li><a href="../placement/current.php">Current</a></li>
                      <li><a href="../placement/previous1year.php">Previous year</a></li>
                      
                    </ul>
                  </li>
                  <li><a href="../contactus/index.php">Contact us</a></li>
                  <li><a href="../internship/index.php" class="has-submenu">Internship</a>
                    <ul class="sub-menu">
                      <li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
                      <li><a href="../internship/Foreign_internship.php">Foreign Internship</a></li>
                      <li><a href="../internship/internship_details.php">Internship Details</a></li>
                    </ul>
                  </li>
									<!-- Login button -->
								  <?php echo loginButton(0); ?>
								</ul>
							</nav>
						</div>
					</div>
				</header>

        <!-- Login button Popup-->
				<?php echo loginButton(1); ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(../files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Our Amazing Team</h1>
							
						</div>
					</div>
				</section>



				
	<!--Section: Team v.4-->
<section  class="section" style="background-color:#9933ff;"> 
    <!--Section sescription-->
     <h2 class="section-description" style="color: white;"><span > Faces Behind The Project</h2></span> 
    <br>

    <div class="row">

        <!--First column-->
        <div class="col-lg-4 col-md-2">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-1" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="HOD.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="HOD.jpg" class="img-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4> MR.DEEPAK MOUD</h4>
                            <p>HOD CS DEPARTMENT</p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here for more</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                        <p>Working as a Head Of Department CS, PIET<br> Also 
                        <br>Handling Departmental Placement cell<br>
                        & Placement Coordinator <br>
                        <p><b>Email:-deepakmoud@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/First column-->


        <!--Second column-->
        <div class="col-lg-4 col-md-6">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-2" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="ADsir.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="ADsir.jpg" class="img-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4>ABHISHEK DADHICH</h4>
                            <p>PIET CS Department <br></p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-2"><i class="fa fa-repeat"></i> Click here for more</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                        <p>Working as a Assistant Professor in CS, PIET<br> Also 
                        <br>Handling Departmental Placement cell<br>
                        & Placement Coordinator <br>
                        <p><b>Email:-abhi231186@gmail.com<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="icons-sm drib-ic"><i class="fa fa-dribbble"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-2"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Second column-->


        <!--Third column-->
        <div class="col-lg-4 col-md-6">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-3" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="nayaksir.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="nayaksir.jpg" class="img-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4>KRUTIBASH NAYAK</h4>
                            <p>PIET CS DEPARTMENT</p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-3"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                          <p>Working as a Assistant Professor in CS, PIET<br> Also 
                        <br>Handling Departmental Placement cell<br>
                        & Placement Coordinator <br>
                        <p><b>Email:-kruti@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                            <li><a class="icons-sm git-ic"><i class="fa fa-github"> </i></a></li>
                            <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-3"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Third column-->


        <!--Fourth  column-->
        <div class="col-lg-4 col-md-2">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-4" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="mukul.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="mukul.jpg" class="img-circle img-responsive" style="border-radius: 60px;">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                         <h4>Mukul Kadel</h4>
                            <p>Project Head</p>
                           
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-4"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                          <p>Poornima Institute of Engineering and Technology <br>  
                        2nd year student 
                        <p><b>Email:-2015pietcsmukul@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-4"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Fourth column-->

<!--Fifth  column-->
        <div class="col-lg-4 col-md-2">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-5" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="bhanu.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="bhanu.jpg" class="img-circle img-responsive" style="border-radius: 50px;">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4>Bhanu Bhist</h4>
                            <p>Developer</p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-5"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                        <p>Poornima Institute of Engineering and Technology <br>  
                        2nd year student 
                        <p><b>Email:-2015pietcsbhanu@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-5"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Fifth column-->

        <!--Sixth column-->
        <div class="col-lg-4 col-md-2" >

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-6" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="tiwari.jpg" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="tiwari.jpg" class="img-circle img-responsive" style="border-radius: 50px;">
                        </div>

                        <!--Content-->
                        <div class="card-block">
                            <h4>Ashutosh Tiwari</h4>
                            <p>Developer</p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-6"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                      <p>Poornima Institute of Engineering and Technology <br>  
                        2nd year student 
                        <p><b>Email:-2015pietcsashutosh@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-6"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Sixth column-->

         <!--seven column-->
        <div class="col-lg-6 col-md-2" style="padding-left:130px">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-7" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="gaurav.JPG" style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="gaurav.JPG" class="img-circle img-responsive" style="border-radius: 50px;">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4>Gaurav Goyal</h4>
                            <p>Designer</p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-7"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                        <p>Poornima Institute of Engineering and Technology <br>  
                        2nd year student 
                        <p><b>Email:-2015pietcsgaurav034@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-7"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/seven column-->

 <!--Eight column-->
        <div class="col-lg-6 col-md-2" style="padding-right:130px">

            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-8" class="card-rotating effect__click">

                    <!--Front Side-->
                    <div class="face front">

                        <!-- Image-->
                        <div class="card-up">
                            <img src="1.jpg"style="border-radius: 40px; height: 350px; width: 100%;">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="1.jpg" class="img-circle img-responsive" style="border-radius: 50px;">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4>Ayush Bhaskar</h4>
                            <p><b>Designer</b></p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-8"><i class="fa fa-repeat"></i> Click here to rotate</a>
                        </div>
                    </div>
                    <!--/.Front Side-->

                    <!--Back Side-->
                    <div class="face back">

                        <!--Content-->
                        <h4>About me</h4>
                        <hr>
                       <p>Poornima Institute of Engineering and Technology <br>  
                        2nd year student 
                        <p><b>Email:-2015pietcsayush@poornima.org<b>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                            <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-8"><i class="fa fa-undo"></i> Click here to rotate back</a>

                    </div>
                    <!--/.Back Side-->

                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Eightumn-->


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
              <p style="font-size:1.1em">©2017 PDS. All rights reserved.</p>
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
                <h4 style="font-size:1.7em">Some pages</h4>
                <ul>
                  <li style="font-size:1.4em"><a href="../index.php">Home</a></li>
                  <li style="font-size:1.4em"><a href="../aboutus/index.php">About us</a></li>
                   <li style="font-size:1.4em"><a href="../contactus/index.php">Contact us</a></li>
                  <li style="font-size:1.4em"><a href="../internship/index.php">Internship</a></li>



                </ul>
              </div>
              <div class="spacing"></div>
            </div>
            <div class="col-md-3">
              <div class="spacing"></div>
              <div class="links">
                <h4 style="font-size:1.7em">Placement</h4>
                <ul>
                  <li style="font-size:1.4em"><a href="../acadmic/planning.php">Planning</a></li>
                  <li style="font-size:1.4em"><a href="../acadmic/syllabus.php">Syllabus</a></li>
                  <li style="font-size:1.4em"><a href="../placement/activity.php">Placement Activities</a></li>
                  <li style="font-size:1.4em"><a href="../placement/current.php">Current</a></li>
                  <li style="font-size:1.4em"><a href="../placement/previous1year.php">Previous  year</a></li>
                
                </ul>
              </div>
              <div class="spacing"></div>
            </div>
            <div class="col-md-3">
              <div class="spacing"></div>
               <div class="links">
              <h4 style="font-size:1.7em">Recruiters</h4>
               <ul>
                  <li style="font-size:1.4em"><a href="../recruiters/gallery.php">Gallery</a></li>
                  <li style="font-size:1.4em"><a href="../recruiters/present.php">Present</a></li>
                  <li style="font-size:1.4em"><a href="../recruiters/upcoming.php">Upcoming</a></li>

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
                                            <li><a href="../acadmic/syllabus.php">Syllabus</a></li>
                        <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>
                                            </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Recruiters</a>
                                    <ul class="sub-menu">
                                       <li><a href="../recruiters/eminent receuiters.php">Eminent Receuiters</a></li>
                                            <li><a href="../recruiters/gallery.php">Gallery</a></li>
                                            <li><a href="../recruiters/present.php">Present</a></li>
                                            <li><a href="../recruiters/upcoming.php">Upcoming </a></li>
                                    </ul>
                                </li>
                                <li><a href="../aboutus/index.php">About us</a></li>
                                <li class="menu-item-has-children"><a href="#">Placement</a>
                                    <ul class="sub-menu">
                    <li><a href="../placement/activity.php">Activities</a></li>
                                        <li><a href="../placement/current.php">Current</a></li>
                                        <li><a href="../placement/previous1year.php">Previous year</a></li>
                                
                                    </ul>
                                </li>
                                <li><a href="../contactus/index.php">Contact us</a></li>
                                <li class="menu-item-has-children"><a href="#">Internship</a>
                                    <ul class="sub-menu">
                                        <li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
                                        <li><a href="../internship/Foregin_internship.php">Foreign Internship</a></li>
                                        <li><a href="../internship/internship_details.php">Internship Details</a></li>
                                    </ul>
                                </li>
                                <!-- Login button -->
                                <?php echo loginButton(0); ?>
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

<!-- JQuery card -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    

</body>


</html>
