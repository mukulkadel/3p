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

	<title>Planning | PDS</title>


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
							<h1>planning</h1>
						
						</div>
					</div>
				</section>

				<section>
					<div class="container">
					<div class="row" style=" text-align: left;">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#er">ELIGIBILITY & REGISTRATION</a></li>
              <li><a data-toggle="tab" href="#res"> RESUME</a></li>
              <li><a data-toggle="tab" href="#prept">PRE-PLACEMENT TALKS (PPT)</a></li>
              <li><a data-toggle="tab" href="#sch">Schedule</a></li>
            </ul>
          <div class="tab-content">
          <div id="er" class="tab-pane fade in active">
            <br>
            <h5>
                <ol>
    						  <li>	All students who expect to graduate from the Institute by the end of the academic year 2016-17 and are seeking employment may register for campus placements with this office. Placement Registration is for ONE ACADEMIC YEAR ONLY.</li>
                  <li>	Registration for all programmes will be done during the month of August.</li>
    							<li>Campus placement is a facility provided for the students. Registration is not compulsory. Students not interested in placement are advised not to register for placement.
               </ol>
            </h5>
          </div>
						<div id="res" class="row tab-pane fade" style=" text-align: left;">
            <br>
						<h5>
                            <ol>
                                <li>	Students are advised to read the announcements made, go through the company website and apply only if interested.</li>

<li>	Students are expected to follow the institute resume template available in the placement website for preparing the resumes.</li>

<li>	The details of the resume have to be genuine and any student found violating this rule will be disallowed from the placement for the rest of the academic year.</li>

<li>	Students have to upload and submit their resumes on the website to individual companies well before the deadline. Resume once submitted cannot be modified. DEADLINES WILL NOT BE EXTENDED UNDER ANY CIRCUMSTANCE.</li>

                                <li>	Students are advised to avoid last minute uploading, as it may lead to delays and some may even be left out. </li>
                            </ol>

</h5>
						</div>
						<div id="prept" class="row tab-pane fade" style=" text-align: left;">
            <br>
						<h5>
            <ol>
						<li>	Notices of the PPT will be published in the placement website well in advance. Students should be seated in the venue 15 minutes before the scheduled start of the PPT.<br></li>
<li>	Students interested in a particular company, can attend its PPT. Attendance for PPT is not compulsory.</li>
<li>	Students must go through the complete selection process of a particular company, once their resumes areaded.</li>

<li>	Any clarification regarding salary break-up, job profile, place of work, bond details etc. must be sought from the companies during PPT or interview.</li>

<li>	DRESS CODE: Students must be formally dressed whenever they participate in any interaction with a company</li>

<li>This office reserves the right to refuse permission to a student to attend the selection process/PPT, if they do not dress up formally. Students are expected to know the norms for formal wear; for the benefit of those who claim ignorance, please note that the following are strictly not allowed:</li>
*	T-shirts with printed text; un-collawhite T-shirts;<br>
*	Shorts<br>
*	Jeans<br>
*	Shirt not-tucked in<br>
*	Chappals / flip-flops<br>
          
            </ol>
						</h5>

						</div>
        <div id="sch" class="tab-pane fade">
        <br>
					<div class="container">



							<h4 style=" text-align:center;color:black;">Department of Computer Engineering </h4>
								<h3 style=" text-align:center;color:black;">Schedule of placement activities for  each Session  </h3>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>


<table style="width:50%" align="center">
  <tr>
    <th>Sr.no</th>
    <th>Activity</th>
    <th>For 6 Sem</th>
  </tr>
  <tr>
    <td>1</td>
    <td>CRT-1(3 DAYS)</td>
    <td>Session for each  section daily </td>
  </tr>
  <tr>
    <td>2</td>
    <td>MOCK DRIVE 1</td>
    <td>Every student</td>
  </tr>
  <tr>
    <td>3</td>
    <td>MOCK DRIVE 2</td>
    <td>Every student</td>
  </tr>
  <tr>
    <td>4</td>
    <td>CRT-2(3 DAYS)</td>
    <td>Session for each  section daily </td>
  </tr>
  <tr>
    <td>5</td>
    <td>MOCK DRIVE 3</td>
    <td>Every student</td>
  </tr>
  <tr>
    <td>6</td>
    <td>MOCK DRIVE 4</td>
    <td>Every student</td>
  </tr>
  <tr>
  	<th> Sr.no. </th>
  	<th> Activity</th>
  	<th> For 4 Sem</th>
  </tr>
  <tr>
    <td>7</td>
    <td>MOCK DRIVE 1</td>
    <td>Every student</td>
  </tr>
  <tr>
    <td>8</td>
    <td>MOCK DRIVE 2</td>
    <td>Every student</td>
  </tr>
   
</table>



 <br>
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
