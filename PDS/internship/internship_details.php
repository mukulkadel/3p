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

	<title>Internship | PDS</title>


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
										<li><a href="placement/activity.php">Activities</a></li>
											<li><a href="../placement/index.php">Current</a></li>
											<li><a href="../placement/previous1year.php">Previous 1 year</a></li>
										
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
							<h1>internship</h1>
							
						</div>
					</div>
				</section>

				<section>
				<div class="container" align="center">
					<table border="1" align="center">
<tr>
	<td align="center" style="color: white; background-color: black;"><b>S.NO</td>
	<td align="center" style="color: white; background-color: black;"><b>Organisation Name</td>
	<td align="center" style="color: white; background-color: black;"><b>Email Id</td>
	<td align="center" style="color: white; background-color: black;"><b>Contact Person</td>
	<td align="center" style="color: white; background-color: black;"><b>Position </td>
	<td align="center" style="color: white; background-color: black;"><b>Place</td>
	<td align="center" style="color: white; background-color: black;"><b>Start Date</td>
	<td align="center" style="color: white; background-color: black;"><b>Last Date </td>
	<td align="center" style="color: white; background-color: black;"><b>Branch</td>
	<td align="center" style="color: white; background-color: black;"><b>Eligibility Criteria</td>
	<td align="center" style="color: white; background-color: black;"><b>Process</td>
	
</tr>

<tr>
	<td align="center">1</td>
	<td align="center">Indian Institute of Technology Madras</td>
	<td align="center"></td>
	<td align="center"></td>
	<td align="center"></td>
	<td align="center">Madras</td>
	<td align="center">05-10-2017</td>
	<td align="center">15-07-2017</td>
	<td align="center">Computer Science and Engineering</td>
	<td align="center">B.Tech. outstanding Academic Background including paper presentation,<br> project execution design contest participation,    score/ranks/ in mathematics Olympiad and <br>any other distinctions</td>
	<td align="center">Apply Online</td>
</tr>
	<tr>
		<td align="center">2</td>
		<td align="center">Centre for Nano Science and Engineering (CeNSE)</td>
		<td align="center"> <a href="#">office@cense.iisc.ernet.in</td></a>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Bangalore</td>
		<td align="center">31-05-2017</td>
		<td align="center">27-07-2017</td>
		<td align="center">Computer Science and Engineering</td>
		<td align="center">Enrolled in a degree program (UG/ PG)</td>
		<td align="center">Apply Online</td>
	</tr>
<tr>
		<td align="center">3</td>
		<td align="center">Dewberry Web Logic Pvt Ltd</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Bangalore</td>
		<td align="center"></td>
		<td align="center">03-03-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	
<tr>
		<td align="center">4</td>
		<td align="center">Enertrak Instruments Pvt. Ltd.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Bangalore</td>
		<td align="center"></td>
		<td align="center">03-03-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">5</td>
		<td align="center">IIT Gandhinagar</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Gandhinagar</td>
		<td align="center">05-08-2017</td>
		<td align="center">14-07-17</td>
		<td align="center"></td>
		<td align="center">Student pursuing bachelor's degree</td>
		<td align="center">Send hardcopy of the filled application form</td>
	</tr>
	<tr>
		<td align="center">6</td>
		<td align="center">Pinnacle Infotech Solutions</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">03-08-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">7</td>
		<td align="center">Daikin India</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">03-08-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">8</td>
		<td align="center">Automation and Control Systems</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">03-08-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">9</td>
		<td align="center">IIT Delhi.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Delhi</td>
		<td align="center"></td>
		<td align="center">03-10-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">10</td>
		<td align="center">National Institute of Science and Technology</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">04-05-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">11</td>
		<td align="center">Raman Research Institute (RRI), Bengaluru</td>
		<td align="center"><a href="#">aoATrri.res.in</td></a>
		<td align="center">Mr. C.S.R. Murthy</td>
		<td align="center">Administrative Officer</td>
		<td align="center">North of Bengluru</td>
		<td align="center"></td>
		<td align="center">15-03-2017</td>
		<td align="center">ALL</td>
		<td align="center">Students within 1 or 2 years of the end of their undergraduate science or engineering degrees having intention of persuing research as career</td>
		<td align="center">Apply Online</td>
	</tr>
	<tr>
		<td align="center">12</td>
		<td align="center">Indian Institute of Science Education and Research (IISER) Thiruvananthapuram.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Thiruvananthapuram</td>
		<td align="center">15-05-2017</td>
		<td align="center">25-07-2017</td>
		<td align="center">ALL</td>
		<td align="center">Bachelors and Masters students in science/engineering with an inclination towards research in basic sciences</td>
		<td align="center">Apply Online</td>
	</tr>
<tr>
		<td align="center">13</td>
		<td align="center">BRPLK Constructions, Jaipur</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Jaipur</td>
		<td align="center"></td>
		<td align="center">15-03-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">14</td>
		<td align="center">Venturesity</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">17/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		
	</tr>
	<tr>
		<td align="center">15</td>
		<td align="center">R. C. Bose Centre for Cryptology and Security</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">17/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		
	</tr>
	<tr>
		<td align="center">16</td>
		<td align="center">IIT Bhubaneswar.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">31/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		
	</tr>
<tr>
		<td align="center">17</td>
		<td align="center">Indian Institute of Information Technology Allahabad (IIIT-Allahbad)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">31/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		
	</tr>
	<tr>
		<td align="center">18</td>
		<td align="center">Dhabriya Polywood Limited, Jaipur</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Jaipur</td>
		<td align="center"></td>
		<td align="center">15/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">19</td>
		<td align="center">Dunes Harley-Davidson.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">15/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">20</td>
		<td align="center">Saha Institute of Nuclear Physics (SINP)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">17/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>

<tr>
		<td align="center">21</td>
		<td align="center">Indian Institute of Science Education and Research, Kolkata (IISER-K)</td>
		<td align="center">(DEADLINE PASSED)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">15/05/17</td>
		<td align="center">14/07/17</td>
		<td align="center"></td>
		<td align="center">B.Sc., M.Sc., B.S., M.S., B.Tech., and B.E.</td>
		<td align="center">Apply Online</td>
	</tr>
	<tr>
		<td align="center">22</td>
		<td align="center">IIT Ropar (DEADLINE PASSED)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">15/05/17</td>
		<td align="center">14/07/17</td>
		<td align="center"></td>
		<td align="center">Civil Engineering, Computer Science and Engineering, Electrical Engineering, Mechanical Engineering, Chemistry, Humanities & Social Sciences, Mathematics, Physics, Centre for Material and Energy Engineering and Centre for Biomedical Engineering</td>
		<td align="center">Apply Online</td>
	</tr>
	<tr>
		<td align="center">23</td>
		<td align="center">IIT Hyderabad (DEADLINE PASSED)</td>
		<td align="center"><a href="#">cse_internship@iith.ac.in</td></a>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">1st week May</td>
		<td align="center"></td>
		<td align="center">Computer Science and Engg.</td>
		<td align="center">CSE, IT or Electronics  Must be completing 3rd year in April/May 2017  2nd Year completing candidates with exceptional academic performance and achievement also considered.</td>
		<td align="center">Apply Online</td>
	</tr>
	<tr>
		<td align="center">24</td>
		<td align="center">Institute of Physics, Bhubaneswar (IOPB)</td>
		<td align="center"><a href="#">ssvp@iopb.res.in</td></a>
		<td align="center"></td>
		<td align="center">Co-ordinator SSVP-2017</td>
		<td align="center">Bhubaneswar</td>
		<td align="center">05-01-2017</td>
		<td align="center">15/07/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Apply Online</td>
	</tr>
<tr>
		<td align="center">25</td>
		<td align="center">Gujarat Energy Research & Management Institute (GERMI)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Gujarat</td>
		<td align="center">10 or 20 /05/17</td>
		<td align="center">60 to 90 Days</td>
		<td align="center">Computer science</td>
		<td align="center"> B. Tech./ B.E, M.Tech./ M.Sc.(Tech) / M.Sc.   majoring in Geology / Physics /Geochemistry / Petroleum exploration/ Geophysics / Civil / Electrical / Mechanical / Computer Science, with interest in Oil & Gas, Solar Energy & Envt.</td>
		<td align="center">Apply Online</td>
	</tr>

	<tr>
		<td align="center">26</td>
		<td align="center">General Electric India (GE)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">27</td>
		<td align="center">Universal Autofoundry Ltd</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">28</td>
		<td align="center">National Institute Of Technology Karnataka</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">22/05/17</td>
		<td align="center">07-05-2017</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>

	<tr>
		<td align="center">29</td>
		<td align="center">Saha Institute of Nuclear Physics (SINP)</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">17/03/17</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Apply Online</td>

	</tr>

<tr>
		<td align="center">29</td>
		<td align="center">Saha Institute of Nuclear Physics (SINP)</td>
		<td align="center"><a href="#">summer.sinp[at]saha.ac.in</td></a>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">May</td>
		<td align="center">July</td>
		<td align="center">Computer Science</td>
		<td align="center">First year M.Sc. Or equivalent B.Tech. & Integrated M.Sc. Candidates should have completed atleast 3 years.</td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">30</td>
		<td align="center">AARMON TECH PRIVATE LIMITED</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">31</td>
		<td align="center">Xerox Research Centre India</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">May</td>
		<td align="center">August</td>
		<td align="center">Computer Science</td>
		<td align="center">UG to PhD</td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">32</td>
		<td align="center">Intel Technology India Private Limited</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center">Working towards a relevant bachelor's, specialist’s, master's, or PhD</td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">33</td>
		<td align="center">IIT-Palakkad, Kerala</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">34</td>
		<td align="center">Yusata Infotech Pvt. Ltd.</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">35</td>
		<td align="center">Aryabhatta Research Institute of Observational Sciences (ARIES), Nainital</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">36</td>
		<td align="center">Tata Institute of Fundamental Research Internship, Bangalore</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">37</td>
		<td align="center">Genpact Ltd, Jaipur</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
<tr>
		<td align="center">38</td>
		<td align="center">National Institute of Oceanography (NIO), Goa</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>

</table>
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
                  <li><a href="placement/activity.php">Placement Activities</a></li>
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
    									<li><a href="../placement/index.php">Current</a></li>
    									<li><a href="../placement/previous1year.php">Previous 1 year</a></li>
    								
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
