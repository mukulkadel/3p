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

	<title>Syllabus | PDS</title>


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

                      <li><a href="../acadmic/syllabus.php">Syllabus</a></li>

                                 <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>
                    </ul>
                  </li>
                  <li><a href="../recruiters/index.php" class="has-submenu">Recruiters</a>
                    <ul class="sub-menu">
                     <li><a href="../recruiters/eminent recruiters.php">Eminent Recruiters</a></li>
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
							<h1>Our syllabus</h1>
							
						</div>
					</div>
				</section>

				<section >
				<div class="container">
					<div class="row" style=" text-align: left;">
			            <ul class="nav nav-tabs">
			              <li class="active"><a data-toggle="tab" href="#intr">Introduction</a></li>
			              <li><a data-toggle="tab" href="#pro">Programs</a></li>
			            </ul>
			          	<div class="tab-content">
			              <br>
			              <div id="intr" class=" row tab-pane fade in active">
				              <br>
				                <div class="col-md-2">
				                <ul class="nav nav-pills nav-stacked">
				                <li class="active"><a data-toggle="pill" href="#ov">Overview</a></li>
				                <li><a data-toggle="pill" href="#tn">The Need</a></li>
				                <li><a data-toggle="pill" href="#ob">Objective</a></li>
				              </ul>
				              </div>
				                <div class="tab-content col-md-10">
				                <div id="ob" class="tab-pane fade">
				                  <br>
				                  <h3>Objectives</h3>
									<p style="text-align:left; font-size: 120%;color:#404040;text-align:justify;" >After successful completion of this training the students should be able to:<br>

									•	Develop aptitude skills for Public Sector Examinations <br>
									•	Develop aptitude skills for Campus Selection of various Private Sector Companies<br>
									•	Bridge the gap between the students and the organization by bringing the companies to the college campus by providing them the technical knowledge related to their respective branch. <br>
									</p>
				                </div>
				                <div id="ov" class="tab-pane fade in active">
				                  <br>
				                  <h3>Overview</h3>
						<p style="text-align:left ;font-size: 120%;color:#404040;text-align:justify;"  >We provide custom designed training programs, which consist of Language Proficiency, Technical Training, Soft Skill Development and Aptitude for Students from various Branches which enable them to bag a job (government/private) and also help in career progression at different levels of their careers. We are dedicated to the development and delivery of world class programs for empowering learners in institutions and organizations.</p>
				                </div>
				                <div id="tn" class="tab-pane fade">
				                  <br>
				                  <h3>The Need</h3>
						<p style="text-align:left;font-size: 120%;color:grey;text-align:justify;" >Are technical or job related skills enough to get a job and career progression?</p>
						<p style="text-align:left;font-size: 120%;color:#404040;text-align:justify;" >Technical and job-related skills are a must, but they are NOT sufficient when it comes to progressing up the ladder. With the traditional paternalistic style of leadership becoming passé, professional managers expect their teams to be proactive and communicate openly.<br>

						There are many factors to be considered when designing a successful, fulfilling career, but the one most often overlooked is aptitude. While you may be able to do anything you put your mind to, that doesn’t mean you’ll be able to do it well.<br>

						"Soft skills again are very important in business. It is essential to be technically sound, but one should also have the ability to convey the idea to the masses in the simplest possible manner,"<br>


						We did a rigorous study on the current industry standards in India and developed a program which can bridge the gap between the academia and the professional world.
						</p>
				                </div>
				                </div>
			              </div>
			              <div id="pro" class=" row tab-pane fade ">
			              <br>
			              <div class="col-md-2">
				                <ul class="nav nav-pills nav-stacked">
				                <li class="active"><a data-toggle="pill" href="#crt">Campus Training</a></li>
				                <li><a data-toggle="pill" href="#pc">Program Content</a></li>
				              </ul>
				              </div>
				                <div class="tab-content col-md-10">
				                <div id="crt" class="tab-pane fade in active">
				                  <br>
				                  <h3>Campus Recruitment Training</h3>
									<p style="font-size: 120%;"><strong>Verbal English Devlopment :-</strong></p> <p style="text-align:left; font-size: 120%;" >This capsule program primarily focuses on those elements of training that requires changes in behaviour and thinking. Organizations today recognize the strong relationship between the soft skills of their employees and effective customer relationships.</p>
									<p style="font-size: 120%;"><strong>Aptitude Building Program :-</strong> </p>
									 <p style="font-size: 120%;" >This program primarily focuses on those topics of
									Math and Reasoning required by various Public Sector Examinations and Campus Selection of various Private Sector Companies. Efforts have been made to incorporate revised and updated questions to help students incorporate high reasoning and aptitude level.
									 </p>
				                </div>
				                <div id="pc" class="tab-pane fade">
				                  <br>
				                  <h3 style="text-align:center;text:bold">Program Content</h3>

							<table width="490" align="center" border="1">
							  <tr>
							    <td align="center" width="54" rowspan="8" bgcolor="#616161" style="color: white;"><strong>DAY 1 </strong></td>
							    <td align="center" width="420" style="color: white; background-color: black;"><strong>TOPIC</strong></td>
							  </tr>
							  <tr>
							    <td align="center" >Average, Profit &amp; Loss</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Percentage</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Time &amp; Work, Pipe &amp; Cistern</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Time &amp; Distance, Trains</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Data interpretation</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Simple Interest &amp; Compound interest</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Allegation &amp; Mixture</div></td>
							  </tr>

							  <tr>
							    <td align="center" width="54" rowspan="8" bgcolor="#616161" style="color: white;"><strong>DAY 2 </strong></td>
							    <td align="center" width="420" >Ratio &amp; Proportion</div></td>
							  </tr>
							  <tr>
							    <td align="center" >LCM &amp; HCF</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Number System</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Fraction &amp; Decimals</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Square &amp; Cube Roots</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Simplification</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Discount</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Volume &amp; Surface Area</div></td>
							  </tr>
							  <tr>
							    <td align="center" width="54" rowspan="10" bgcolor="#616161" style="color: white;"><strong>DAY 3 </strong></td>
							    <td align="center" width="420" >Odd Man Out and Series</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Height &amp; Distance</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Clock &amp;Calendars</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Logarithm</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Problems on Ages</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Quadratic Equation</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Linear Equation</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Inequalities</div></td>
							  </tr>
							   <tr>
							    <td align="center" >Permutation &amp; Combinations</div></td>
							  </tr>
							   <tr>
							    <td align="center" >Probabilities</div></td>
							  </tr>
							  <td align="center" width="54" rowspan="12" bgcolor="#616161" style="color: white;"><strong>DAY 4 </strong></td>
							    <td align="center" width="420" >Cutting & Completion</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Figure Matrix</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Blood Relations</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Analytical Reasoning</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Series</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Classification</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Cube & Dice</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Analogy</div></td>
							  </tr>
							   <tr>
							    <td align="center" >Assertion & Reasoning</div></td>
							  </tr>
							   <tr>
							    <td align="center" >Data Sufficiency</div></td>
							  </tr>
							  <tr>
							    <td align="center" >Logical Venn Diagram</div></td>
							  </tr>
							   <tr>
							    <td align="center" >Direction Sense Test</div></td>
							  </tr>
							</table>
				                </div>
				                </div>
			              </div>
			        </div>
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
                  <li><a href="../recruiters/present.php">Present</a></li>
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
                        <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>
                        </ul>
                  </li>
                  <li class="menu-item-has-children"><a href="#">Recruiters</a>
                    <ul class="sub-menu">
                     <li><a href="../recruiters/eminent recruiters.php">Eminent Recruiters</a></li>
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



</body>


</html>
