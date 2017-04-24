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

	<title>Placement_pre | PDS</title>


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
							<h1>Placement-Preparations</h1>
							<span>Rule & Regulation</span>
						</div>
					</div>
				</section>

				<section>
					<div class="container">
					<div class="row" style=" text-align: left;">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#ppp">Pre-Placement Prepartion</a></li>
              <li><a data-toggle="tab" href="#sst">Soft Skill Training</a></li>
              <li><a data-toggle="tab" href="#vasd">Value Added Skill Devlopments</a></li>
              <li><a data-toggle="tab" href="#cdp">Career Development Programs</a></li>
            </ul>
          <div class="tab-content">
              <br>
              <div id="ppp" class=" row tab-pane fade in active">
              <br>
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#ob">Objective</a></li>
                <li><a data-toggle="pill" href="#inc">It Includes</a></li>
                <li><a data-toggle="pill" href="#to">Topics</a></li>
              </ul>
              </div>
                <div class="tab-content col-md-10">
                <div id="ob" class="tab-pane fade in active">
                  <br>
                  <h3>The Objective of the Activity is :-</h3>
                  • To Bridge the gap that currently exists between the Industry and fresh professionals for recruitment purposes.<br>
                  • To minimize Stage fear.<br>
                  • To build confidence among students.<br>
                  • To make students know the Importance of Training & Placements.<br>
                  • Make them prepared for further training session and placements.<br>
                </div>
                <div id="inc" class="tab-pane fade">
                  <br>
                  <h3>The pre-placement activities of department includes :-</h3>
                    • Preparation of Placement Brochure for final placement.<br>
                    • Pre-placement visits (PPV) to the companies.<br>
                    • Communication, networking and relationship building with the potential recruiters<br>
                    • Invitation to potential recruiters to visit the Institute/department.<br>
                    • Continuation of placement activities after the stipulated period, till all the students are placed.<br>
                    • General follow-up, joining formalities and other administrative activities<br>
                    • Grooming and training of the candidates for the placements so that their chances of selection increase.<br>
                    • Improving the communication abilities of students and technical knowledge of student.<br> 
                </div>
                <div id="to" class="tab-pane fade">
                  <br>
                  <h3>The Students are trained on aspects like :-</h3>
                    1.  Facing Interviews.<br>
                    2.  Facing Group Discussions.<br>
                    3.  Professional Resume Writing.<br>
                    4.  Cracking Aptitude Exams.<br>
                    5.  Skill Development Sessions & Programs.<br>
                    6.  Preparing Mock Exercises.<br>
                    7.  Recruitment and Placement Sessions.<br>
                    8.  Arranging Seminars and Technical talks.<br><br>
                    Pre-placement training activity evaluated students to improve their performance on daily basis<br>
                </div>
                </div>
                <div class="col-md-12">
                <br>
                <hr>
                <p>Department of Computer Engineering enables the students to bridge the gap between the Academia and Corporate world. Feedback from industry is collected and the feedback used to design Pre-Placement Training Programs. This important activity is vital to enable the students to achieve desired career objective.</p>
                </div>
              </div>
              <div id="sst" class="row tab-pane fade">
                <br>
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#intro">Course Structure</a></li>
                <li><a data-toggle="pill" href="#sy">Skills</a></li>
              </ul>
              </div>
                <div class="tab-content col-md-10">
                <div id="intro" class="tab-pane fade in active">
                  <br>
                  <h3>Introduction :-</h3>
                    •  How to introduce yourself<br>
                    •  Basic rules of Introduction<br>
                    •  SWOT Analysis<br>
                    •  Short stories<br>
                    •  Training methodology: class lecture<br>
                    •  Activity: one to one introduction<br>
                    •  Resources required: common classroom<br>
                </div>
                <div id="sy" class="tab-pane fade" align="center">
                  <br>
                  <h3>The training modules have been formulated to improve our student's skills like :-<br><h3></h4>
                    <table border="1">
                      <tr>
                        <td align="center"><strong>Presentation<br>Skills</strong></td>
                        <td align="center"><strong>Listening<br>Skills</strong></td>
                        <td align="center"><strong>Interpersonal<br>Skills</strong></td>
                        <td align="center"><strong>Personal<br>Grooming</strong></td>
                      </tr>
                      <tr>
                        <td align="center"><strong>Reasoning</strong></td>
                        <td align="center"><strong>Brain<br>Strain</strong></td>
                        <td align="center"><strong>Speed<br>Mathematics</strong></td>
                        <td align="center"><strong>Logical</strong></td>
                      </tr>
                      <tr>
                        <td align="center"><strong>Verbal<br>Reasoning</strong></td>
                        <td align="center"><strong>Conversation</strong></td>
                        <td align="center"><strong>Creativity</strong></td>
                        <td align="center"><strong>Team<br>Building</strong></td>
                      </tr>
                      <tr>
                        <td align="center"><strong>Group<br>Discussion</strong></td>
                        <td align="center"><strong>Planning Goal<br>Setting</strong></td>
                        <td align="center"><strong>Time<br>Management</strong></td>
                        <td align="center"><strong>Personnel<br>Counselling</strong></td>
                      </tr>
                      <tr>
                        <td align="center"><strong>Assessment</strong></td>
                        <td align="center"><strong>Confidence</strong></td>
                        <td align="center"><strong>Attitude</strong></td>
                        <td align="center"><strong>Communication<br>Skills</strong></td>
                      </tr>
                      <tr>
                        <td align="center"><strong>Self Esteem</strong></td>
                        <td align="center"><strong>Overcoming Fear &<br>Anxiety</strong></td>
                        <td align="center"><strong>Self-Awareness</strong></td>
                        <td align="center"><br></td>
                      </tr>
                    </table>
                </div>
                </div>
                <div class="col-md-12">
                <br>
                <hr>
                <p>Our soft skills training solutions are a shortcut to experience. By giving the right inputs, we can bring the workforce up the learning curve in a fast, cost-effective and timely manner. This not only saves learning time but also helps build and refine a company’s workforce, leading to operational excellence and an improvement in the use of English at work.</p>
                </div>
              </div>
              <div id="vasd" class="row tab-pane fade">
                <br>
                • Regular Seminars are conducted to keep in touch with the recent trends in the Higher education scenario by resource persons from our Alumni who have done Higher Studies and employed in India and Abroad.<br>
                • Software courses in terms of Workshop are also conducted for students on the following areas:<br><br>
                <table border="1" align="center">
                  <tr>
                    <td align="center"><strong>CCNA</strong></td>
                    <td align="center"><strong>PHP</strong></td>
                    <td align="center"><strong>.NET</strong></td>
                  </tr>
                  <tr>
                    <td align="center"><strong>ORACLE</strong></td>
                    <td align="center"><strong>J2EE</strong></td>
                    <td align="center"><strong>PYTHON</strong></td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center"><strong>INTERNET PROGRAMMING (HTML, XML, ASP, JAVASCRIPT)</strong></td>
                  </tr>
                </table>
              </div>
              <div id="cdp" class="tab-pane fade">
                <br>
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#introd">Introduction</a></li>
                <li><a data-toggle="pill" href="#ph">Phases</a></li>
              </ul>
              </div>
                <div class="tab-content col-md-10">
                <div id="introd" class="tab-pane fade in active">
                  <br>
                  <h3>Introduction :-</h3>        
            The Placement and Training cell of the Department of Computer Engineering caters for enhancing not only the employability skills of the passing out Amities but also the overall development of their personality. <span style="color:blue;"> Placement and Training Cell</span> offering<span style="color:blue;"> Career Development Program</span> for the students who are raring to enter the corporate world and introduce them to the prospective employers according to their aspirations and background. The Training programs have been formulated after a thorough analysis of unique requirement of various companies as the required skills will vary according to the company’s requirement. We impart this training program with the help of reputed training Institutes. They enable our students to gain a competitive edge in the recruitment process, groom their confidence and develop their personality.<br><br>
            Students are trained to work as a team, think on their feet, improve presentation and communication skills and build a positive attitude. This all-round grooming multiplies their chances to get selected by top corporates in campus placements.<br><br>
             The department organizes on campus and off campus recruitments and pre-placement training programmes through Aptitude tests, Group Discussions, Interviews and presentation skills.<br><br>
                </div>
                <div id="ph" class=" row tab-pane fade">
                  <br>
                  <div class="col-md-3" align="center">
                  <br><br>
                  <h3>First Phase :-<br></h3>
                    <table border="1">
                      <tr>
                      <td align="center">1.</td>
                        <td align="center"><strong>Personality<br>Development</strong></td>
                      </tr>
                      <tr>
                      <td align="center">2.</td>
                        <td align="center"><strong>Communication<br>Skills</strong></td>
                      </tr>
                      <tr>
                      <td align="center">3.</td>
                        <td align="center"><strong>Leadership<br>Skills</strong></td>
                      </tr>
                    </table>
                    </div>
                    <div class="col-md-3" align="center">
                    <br><br>
                    <h3>Seacond Phase :-<br></h3>
                    <table border="1">
                      <tr>
                      <td align="center">1.</td>
                        <td align="center"><strong>Positive Thinking</strong></td>
                      </tr>
                      <tr>
                      <td align="center">2.</td>
                        <td align="center"><strong>Motivation</strong></td>
                      </tr>
                      <tr>
                      <td align="center">3.</td>
                        <td align="center"><strong>Presentation Skills</strong></td>
                      </tr>
                      <tr>
                      <td align="center">4.</td>
                        <td align="center"><strong>Time Management</strong></td>
                      </tr>
                      <tr>
                      <td align="center">5.</td>
                        <td align="center"><strong>Goal Setting</strong></td>
                      </tr>
                    </table>
                    </div>
                    <div class="col-md-3" align="center">
                    <br><br>
                    <h3>Third Phase :-<br></h3>
                    <table border="1">
                      <tr>
                      <td align="center">1.</td>
                        <td align="center"><strong>Quantitative Aptitude</strong></td>
                      </tr>
                      <tr>
                      <td align="center">2.</td>
                        <td align="center"><strong>Verbal Ability</strong></td>
                      </tr>
                      <tr>
                      <td align="center">3.</td>
                        <td align="center"><strong>Company Pattern Discussion and Knowledge Testing</strong></td>
                      </tr>
                      <tr>
                      <td align="center">4.</td>
                        <td align="center"><strong>Online Tests</strong></td>
                      </tr>
                      <tr>
                      <td align="center">5.</td>
                        <td align="center"><strong>GDs</strong></td>
                      </tr>
                    </table>
                    </div>
                    <div class="col-md-3" align="center">
                    <br><br>
                    <h3>Fourth Phase :-<br></h3>
                    <table border="1">
                      <tr>
                      <td align="center">1.</td>
                        <td align="center"><strong>Interview<br>Skills</strong></td>
                      </tr>
                      <tr>
                      <td align="center">2.</td>
                        <td align="center"><strong>Mock Interviews</strong></td>
                      </tr>
                      <tr>
                      <td align="center">3.</td>
                        <td align="center"><strong>Resume<br>Preparation</strong></td>
                      </tr>
                      <tr>
                      <td align="center">4.</td>
                        <td align="center"><strong>Online<br>Tests</strong></td>
                      </tr>
                    </table>
                    </div>
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



</body>


</html>
