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
                         <li><a href="../acadmic/Placement_pre.php">Placement Preparations</a></li>

										</ul>
									</li>
									<li><a href="../recruiters/index.php" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
											<li><a href="../recruiters/gallery.php">Gallery</a></li>
											<li><a href="../recruiters/present.php">Present</a></li>
											<li><a href="../recruiters/upcoming.php">Upcoming recruiters</a></li>

										</ul>
									</li>
									<li><a href="../aboutus/index.php">About us</a></li>
									<li><a href="../placement/index.php" class="has-submenu">Placement</a>
										<ul class="sub-menu">
										<li><a href="../placement/activity.php"> Activities</a></li>
											<li><a href="../placement/current.php">Current</a></li>
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
        <section>
          <div class="container">
          <div class="row" style=" text-align: left;">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#er">Placement Activities</a></li>
              <li><a data-toggle="tab" href="#res"> Corporate Relations Officers</a></li>
              <li><a data-toggle="tab" href="#prept">Placement Model</a></li>
              <li><a data-toggle="tab" href="#sch">Placement Records</a></li>
               <li><a data-toggle="tab" href="#st">Student Testimonial</a></li>
            </ul>
          <div class="tab-content">
          <div id="er" class="tab-pane fade in active">
            <br>
            <h5 align="justify">
              <p>
              
                 • Weekly two hours training on Aptitude.<br>
                  •  Weekly two hours training on Verbal and Non-Verbal Reasoning sessions.<br>
                  •  Monthly one group discussion session.<br>
                  • Special Communication Development Training programs will be conducted by P-PROSKEP once in a month<br>
                  • Fortnightly once communication development training will be conducted by our trained faculties.<br>
                  •  The division mainly focuses on 100 % Placements.<br>
                  •  Regular interaction by the Placement Officer with the students for fine tuning.<br>
                  • Imparting the importance of English by implementing as English Campus.<br>
                  •  Equipped Language laboratory used to improve the students Communication in English.<br>
                  •  Organizing the sessions for making the students employable and to meet the corporate expectations.<br>
                  •  Individual counselling to make them understand the certainty of life.<br>
                  • Train them to work towards the goal.
                  
                  </p>
                  <p >
                    The record breaking placement at Department of Computer Engineering is an apt testimony to its focus on upholding the highest academic standards right from selecting topmost faculty to help students, introducing world-class pedagogical practices to personality development of the students.<br>

                    Training and Placement cell is well organized by<span style="font-weight:900;color:blue;"> Mr.  Abhishek Dadhich,</span>  Hardworking, Dedication and Experience of many years in various aspects and he also maintains the amicable environment with the good organizations. In his presence students procure so many placements in top MNC companies.<br>
                  </p>
            </h5>
          </div>
            <div id="res" class="row tab-pane fade" style=" text-align: left;">
            <br>
            
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
            <div id="prept" class="row tab-pane fade" style=" text-align: left;">
            <br>
            <h5>
            <ol>
           
          <p >Department of Computer Engineering provides full placement support to  its students in all in its areas of professional education &ndash; Technology. The  underlying objective of the department is to create and transfer knowledge for  the welfare of the society.<br />
    <br />
  Over the last decades the department has emerged as one of the most favoured  destination for hiring fresh Talent from the Campuses. Its endeavours to  provide Industry compliant talent and emphasis on Quality, Discipline,  Self-Learning, Ethics and Values have borne rich dividends.&nbsp;<br />
  <br />
  Our Placement model is a four-stage process involving the Pre-Placement  activities, Career Guidance, Executing Placement and Post Placement reviews.<br />
</p>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%"><br />
        <img width="250" height="200" src="../files/images/model.png"  /> </td>
    <td width="10%"></td>
    <td width="65%"><p >In addition to providing Placement    support to the students in the prestigious organisations, we also facilitate    training of our students in the industries during summer vacations, project    work for the students in the final year, continuous institute-industry    interactions, alumni activities, participation in exhibitions, fairs,    seminars and conferences, counselling of the students on job opportunities,    facilitating industry visits and inviting distinguished speakers to add value    in our programs.&nbsp;<br />
      Our students today are occupying    converted positions in Multinationals, Corporates, PSUs and other    organisations with excellent compensation packages. </p></td>
  </tr>
</table>
<p>Leveraging on its intellectual vitality and  integrity, the Department seeks to maximize opportunities for partnerships and  collaborations with industry in the fields of Technology leading to value  creation and continuous innovation. It is distinguished by its highly  collaborative, interdisciplinary and entrepreneurial environment.</p>
            </ol>
            </h5>

            </div>
        <div id="sch" class="tab-pane fade">
        <br>
        <h3><strong>Year: 2016-2017</strong><strong> </strong></h3>
<table width="642" border="1" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
  <tr>
    <td width="50%" height="42" valign="top"><p class="style8">&nbsp;Total No of Students Registered for Placement</p></td>
    <td width="50%" valign="top"><p >&nbsp; 95</p></td>
  </tr>
  <tr>
    <td width="50%" height="33" valign="top"><p class="style8">&nbsp;Total No of Students    Got Placed</p></td>
    <td width="50%" valign="top"><p >&nbsp;74</p></td>
  </tr>
  <tr>
    <td width="50%" height="37" valign="top"><p class="style8">&nbsp;% of Students Placed</p></td>
    <td width="50%" valign="top"><p>&nbsp;78.72 (As on    15.4.2017)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="50%" height="44" valign="top"><p class="style8">&nbsp;Noteworthy Companies</p></td>
    <td width="50%" valign="top"><p >&nbsp;Infosys, Capgemini, Biz-Viz,TCS</p></td>
  </tr>
  <tr>
    <td width="50%" height="52" valign="top"><p class="style8">&nbsp;Average Salary</p></td>
    <td width="50%" valign="top"><p >&nbsp;Rs. 3.30,000 P. A.</p></td>
  </tr>
</table>
         

 <br>
          </div>
          <div id="st" class="tab-pane fade">
          <br>
          <p align="justify" style="font-size:15px">
          I am really grateful to the department for the fruitful strengthening of my skills and the motivation they provided. Achieving the endeavours is a total work of mutual work, the scrum is to get and interpret well. The achievements are all a result of a strong base.<br>
            <samp style="color:blue;font-size:90%">Gaurang, Infosys Technologies Limited </samp><br><br>
            Getting placed in first company in campus was a different feeling because department had put lot of efforts for that. But the key point is to not stopping and keep trying to achieve more.<br>
            <samp style="color:blue;font-size:90%">Raghav Maheshwari, Infosys Technologies Limited , calsoft , bizviz </samp><br><br>
            Getting placed in Capgemini was such an amazing feeling and I really want to thank all the Faculty members of CS department who really helped us and had put a lot of efforts in getting placed in the company. And they really motivated us to achieve more and get more success in future.<br>
            <samp style="color:blue;font-size:90%">SupriyaKumari, Capgemini Pvt. Ltd. </samp><br><br>
            Getting placed was a really best feeling, it was a great achievement which I could not have achieved without all the help from department, teachers. All those tests and mock drives helped me boast my confidence which improved me in all the fields which were required to crake the placement drive.<br>
            <samp style="color:blue;font-size:90%">Aditi Singh Parmar, Infosys Pvt. Ltd.</samp><br><br>
            Getting placed in the second company was one of the best feeling, and one of the most important day in my life. The way department encourage me for the interview and supported me for the three years was most amazing this. All the mock test and interviews taken by the department is the best thing and it was very helpful. I personally want to thank RekhaSinghal ma’am (Asst. Professor) for always supporting me.<br>
            <samp style="color:blue;font-size:90%">Pooja Kunwar, Capgemini Pvt. Ltd</samp><br><br>
            I am very thankful to our dept. that helped me to get placed in a good company. Department helped us to learn different things and each teacher gave their full efforts to help us. I am very thankful to everyone for their support and encouragement. Thanks a lot.<br>
            <samp style="color:blue;font-size:90%">Abhinav Singh Rtahore, In Time Tec Vision Soft Pvt. Ltd. </samp><br><br>
            Well is was not easy for me to get placed in Infosys: a company which demands high level of aptitude and communication skills. I’m thankful to department for their efforts and sharpening my skills which helped me land this job.<br>
            <samp style="color:blue;font-size:90%">Azhar Khan, Infosys Pvt. Ltd. </samp><br><br>
            I am very thankful for my department first that, they have put a lot of efforts on each and every student for getting placed in good multinational company. Well I got placed in Infosys Pvt. Ltd. That the very first company in our college. All I have to say thanks for each and every thing to each faculty members and especially HOD sir.<br>
            <samp style="color:blue;font-size:90%">Shiv Shakti, Infosys Pvt. Ltd. </samp><br><br>
            I’m glad to write this because only few students are writing this over here about placement activities here. Our department really gave us their best to place their students. Only our department I can say gave this much. All I wanna say is I’m really feeling lucky being part of this college and department.<br>
            <samp style="color:blue;font-size:90%">Krati Bhatnagar, Capegemini , BigData Technologies BizVizPvt. Ltd. </samp><br><br>
            </p>

          <br>
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
                  <li><a href="../placement/current.php">Current</a></li>
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
    									<li><a href="../recruiters/gallery.php">Gallery</a></li>
    									<li><a href="../recruiters/present.php">Present</a></li>
    									<li><a href="../recruiters/upcoming.php">Upcoming recruiters</a></li>
    								</ul>
    							</li>
    							<li><a href="../aboutus/index.php">About us</a></li>
    							<li class="menu-item-has-children"><a href="#">Placement</a>
    								<ul class="sub-menu">
    									<li><a href="../placement/activity.php">Activities</a></li>
    									<li><a href="../placement/current.php">Current</a></li>
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
