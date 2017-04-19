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

	<title>Placement Activities| PDS</title>


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
									<li><a href="../acadmic/index.php" class="has-submenu">Acadmic</a>
										<ul class="sub-menu">
											<li><a href="../acadmic/planning.php">Planning</a></li>

											<li><a href="../acadmic/syllabus.php">Syllabus</a></li>

										</ul>
									</li>
									<li><a href="../recruiters/index.php" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
											<li><a href="../recruiters/gallery.php">Gallery</a></li>
											<li><a href="../recruiters/index.php">Present</a></li>
											<li><a href="../recruiters/upcoming.php">Upcoming recruiters</a></li>

										</ul>
									</li>
									<li><a href="../aboutus/index.php">About us</a></li>
									<li><a href="../placement/index.php" class="has-submenu">Placement</a>
										<ul class="sub-menu">
										<li><a href="../placement/activity.php"> Activities</a></li>
											<li><a href="../placement/index.php">Current</a></li>
											<li><a href="../placement/previous1year.php">Previous 1 year</a></li>
										
										</ul>
									</li>
									<li><a href="../contactus/index.php">Contact us</a></li>
									<li><a href="../internship/index.php" class="has-submenu">Internship</a>
										<ul class="sub-menu">
											<li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
											<li><a href="../internship/Foreign_internship.php">Foreign Internship</a></li>
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
							<h1>Activities</h1>
							
						</div>
					</div>
				</section>

				<section class="call-to-action-1" >
					<div class="container">
						<div class="row" style=" text-align: left;">
								<h2 style=" font-style: italic;font-size: 1.875em;">Placement Activities</h2>
								<p style="font-size:130%;font-family:  Times, serif;background-color:lightgrey; ">
									
									•	Weekly two hours training on Aptitude.<br>
									•	 Weekly two hours training on Verbal and Non-Verbal Reasoning sessions.<br>
									•	 Monthly one group discussion session.<br>
									•	Special Communication Development Training programs will be conducted by P-PROSKEP once in a month<br>
									•	Fortnightly once communication development training will be conducted by our trained faculties.<br>
									•	 The division mainly focuses on 100 % Placements.<br>
									•	 Regular interaction by the Placement Officer with the students for fine tuning.<br>
									•	Imparting the importance of English by implementing as English Campus.<br>
									•	 Equipped Language laboratory used to improve the students Communication in English.<br>
									•	 Organizing the sessions for making the students employable and to meet the corporate expectations.<br>
									•	 Individual counselling to make them understand the certainty of life.<br>
									•	Train them to work towards the goal.
								</p>
									<p style="font-size:130%;font-family:  Times, serif;background-color:lightgrey; ">
										The record breaking placement at Department of Computer Engineering is an apt testimony to its focus on upholding the highest academic standards right from selecting topmost faculty to help students, introducing world-class pedagogical practices to personality development of the students.<br>

										Training and Placement cell is well organized by<span style="font-weight:900;color:blue;"> Mr.  Abhishek Dadhich,</span>  Hardworking, Dedication and Experience of many years in various aspects and he also maintains the amicable environment with the good organizations. In his presence students procure so many placements in top MNC companies.<br>


									</p>
								<h2 style=" font-style: italic;font-size: 1.875em; background-color:lightgrey; "align="center">Corporate Relations Officers</h2>
								<table width="643" height="340" border="1" align="center">
  <tr>
    <td width="24" height="69"  ><p><strong>Sr.<br />
No.</strong></p>
    </td>
    <td width="128"><strong>Name</strong></td>
    <td width="143"><strong>Designation</strong></td>
    <td width="200"><strong>Email</strong></td>
    <td width="114"><strong>Mobile  Number</strong></td>
  </tr>
  <tr>
    <td height="77">1</td>
    <td><u><strong>Deepak Moud</strong></u></td>
    <td>Head  of Department, Department of Computer Engineering</td>
    <td ><a href="mailto:deepakmoud@poornima.org"><span style="color:blue;">deepakmoud@poornima.org</span></a></td>
    <td>+91-7568748510</td>
  </tr>
  <tr>
    <td>2</td>
   	<td><u><strong>Abhishek Dadhich</strong></u></td>
    <td>Senior  Manager Corporate Relations,&nbsp;<br />
Department of Computer Engineering</td>
    <td><a href="mailto:abhishek.dadhich@poornima.org"><span style="color:blue;">abhishek.dadhich@poornima.org</span></a></td>
    <td>+91-9001571710</td>
  </tr>
  <tr>
    <td>3</td>
    <td><u><strong>Krutibash Nayak</strong></u></td>
    <td>Placement  In-Charge,<br />
Department of Computer Engineering</td>
    <td><a href="mailto:kruti@poornima.org"><span style="color:blue;">kruti@poornima.org</span></a></td>
    <td>+91-9799644596</td>
  </tr>
</table>
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
    							<li class="menu-item-has-children"><a href="../acadmic/index.php" >Acadmic</a>
    								<ul class="sub-menu">
    										<li><a href="../acadmic/planning.php">Planning</a></li>
    										<li><a href="../acadmic/syllabus.php">Syllabus</a></li>
    										</ul>
    							</li>
    							<li class="menu-item-has-children"><a href="#">Recruiters</a>
    								<ul class="sub-menu">
    									<li><a href="../recruiters/gallery.php">Gallery</a></li>
    									<li><a href="../recruiters/index.php">Present</a></li>
    									<li><a href="../recruiters/upcoming.php">Upcoming recruiters</a></li>
    								</ul>
    							</li>
    							<li><a href="../aboutus/index.php">About us</a></li>
    							<li class="menu-item-has-children"><a href="#">Placement</a>
    								<ul class="sub-menu">
    									<li><a href="../placement/activity.php">Activities</a></li>
    									<li><a href="../placement/index.php">Current</a></li>
    									<li><a href="../placement/previous1year.php">Previous 1 year</a></li>
    									
    								</ul>
    							</li>
    							<li><a href="../contactus/index.php">Contact us</a></li>
    							<li class="menu-item-has-children"><a href="#">Internship</a>
    								<ul class="sub-menu">
    									<li><a href="../internship/Summer_internship.php">Summer Internship</a></li>
    									<li><a href="../internship/Foregin_internship.php">Foreign Internship</a></li>
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



</body>


</html>
