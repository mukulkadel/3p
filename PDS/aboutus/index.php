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

	<title>About us | PDS</title>


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
							<h1>About Us</h1>
							<span></span>
						</div>
					</div>
				</section>
				<section>
					<div class="container">
					<div class="row" style=" text-align: left;">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#ppp">About Placement Cell</a></li>
              <li><a data-toggle="tab" href="#sst">Message</a></li>

            </ul>
          <div class="tab-content">
              <br>
              <div id="ppp" class=" row tab-pane fade in active">
              <br>
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#about">About US</a></li>
                <li ><a data-toggle="pill" href="#ob">Objective</a></li>
                <li><a data-toggle="pill" href="#inc">Mission</a></li>
                <li><a data-toggle="pill" href="#to">Vision</a></li>

              </ul>
              </div>
                <div class="tab-content col-md-10">
                <div id="about" class="tab-pane fade in active">
                  <br>
                  <h3>About Placement Cell-</h3>
                  The Department of Training & Placement is the backbone of any institute. From the very beginning the department lays greater emphasis on industrial training, practical training for Engineering. The students are introduced to industrial practices through training in the institute workshops and in industries.<br>

								The Training and Placement Cell imparts training to students from the first year onwards giving emphasis to motivational skills, communication skills, interpersonal relationships, leadership qualities, group discussions and interview techniques. Resource persons and professionals from reputed Industries and Institutions along with college faculties train the students. The Training and Placement Cell provides the infra-structural facilities to conduct group discussions, tests and interviews besides catering to other logistics. <br>

								The department of Computer Engineering provides its students the best in life, with placement centre functioning in the campus under the able administration with the assistance of an experienced faculty in each discipline. The very active placement centre serves as a foundation for many careers by guiding students in right direction through continuous counselling and arranging for campus recruitments. This centre creates a meticulous database and assists the students in getting placed in national & multinational companies through campus recruitment.The Placement Cell also helps the weak students to improve their academic performance by counselling. This cell also helpings students to improve their command on English language & Communication skill.The database of the students is managed by the cell, which plays a critical role in getting jobs for the alumni.Alumni are visiting regularly to motivate and share experience regarding current market scenario as well as placement drives.<br>

                </div>
                <div id="ob" class="tab-pane fade" align="justify">
                  <br>
                  <h3>Objective</h3>

                  •	Create awareness among students regarding available career options and help them in identifying their career objectives.<br>
								•	Guide the students in developing skills and job-search strategies required to achieve their career objectives.<br>
								•	Identify suitable potential employers and help them achieve their hiring goals.<br>
								•	Organize activities concerning career planning.<br>
								•	Act as a bridge between students, alumni and employers.



                </div>
                <div id="inc" class="tab-pane fade" align="justify">
                  <br>
                  <h3>Mission</h3>
                  The mission of Training and Placement Cell of the department is to achieve maximum placement for students through dedication, attitude and complete involvement.To achieve 100% placement for students through dedication, attitude and complete involvement is our mission. <br>
								The cell conducts training activities for the students mainly focusing on Career planning, Personality Development Industry- Institute Interaction, off site training, Industrial visits, Campus placements, Entrepreneurship Development. Continuous interaction of the cell with the industries also helps in achieving the above goals & motivating students to contribute in this direction.<br>
								Training and Placement Cell arranges and coordinates various programmes that aim at moulding the students so as to meet the expectations in career building and in turn bring glory to the parent institution. In this regard, we organize common placement programs and guide the students for campus recruitments conducted in Poornima Foundation and other reputed institutions.<br>
								• To focus on Placement from the day one.<br>
								• To impart the importance of Human Values to our students.<br>
								• To help the students to get confidence psychologically to meet the reality of life and outshine in their field.<br>
								• To maintain a regular relationship with companies and train the students according to their expectations.<br>

                </div>
                <div id="to" class="tab-pane fade">
                  <br>
                  <h3>Vision</h3>
                  The placement cell holds the objective of acquainting the students of the Institute with Industries. The Placement cell organizes and extends services towards collaborative placement activities. Equipping the students with significant and conceptualized professional skills and guiding them towards a bright future and career all around the world with the values of – Sincerity, Hard Work and Justice.The goal of the Training & Placement Cell of the Department is to provide employment opportunities and world class training to students of the department in leading organizations/Industry.<br>
								• Train the students equally.<br>
								• To get employed in reputed companies.<br>
								• To excel as an Entrepreneur.<br>
								• Importance of Research.<br>
								• Creating enthusiastic competent personalities.<br>
								• Empowering the students with Values and professional skills to get placed in the appropriate field.<br>
								• Students expertise themselves.

                </div>
                </div>
                </div>
                 <div id="sst" class="row tab-pane fade">
                <br>
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#intro">HOD Message</a></li>
                <li><a data-toggle="pill" href="#sy">TPO message</a></li>
              </ul>
              </div>
                <div class="tab-content col-md-10">
                <div id="intro" class="tab-pane fade in active" align="justify">
                  <br>
                  <h3> HOD Message</h3>
                  The Industry is changing at a fast pace. We need to adapt ourselves with this changing scenario in the professional environment. At our department; our mission is to produce professionally competent world class Engineers by providing value based and quality education to the students and to make them adaptable to ever changing demands and requirements of the industry by grooming their soft skills and life skills.<br>
					Department of Computer Engineering has proved its mettle by standing amongst top department of Poornima Foundation and by providing best placement within short span of 8 years.<br>
					Our collaboration with various industries has resulted in mutual benefits both for the students, as well for the industry. We encourage all private and government sector organizations to participate in the recruitment process towards the overall development of the students.<br>
					It is a matter of honor to mention here that our placement process is a culmination of a strong training structure, which includes technical training, industry oriented trainings, aptitude, communication, soft skills life skills training throughout the year. With great pleasure and honour, we invite industrial & corporate houses at our department and to meet our students to share a common platform towards the overall growth of the nation.

                </div>

                <div id="sy" class="tab-pane fade" align="justify">
                <br>
                <h3>TPO message</h3>
                 Add further instruction will be added soon.
                </div>
            </div>
         </section>








        <footer class="footer">
          <div class="three spacing"></div>
    	  <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h1>
                <a href="../index.php"><img src="../logopds.png" width="130px"></a>
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
                  <li><a href="../placement/current.php">Current</a></li>
                  <li><a href="../placement/previous1year.php">Previous year</a></li>

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
    							<li class="menu-item-has-children"><a href="../acadmic/index.php" >Academic</a>
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
