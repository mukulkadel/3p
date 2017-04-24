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

	<title>Gallery | PDS</title>


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
										<li><a href="../placement/activity.php"> Activities</a></li>
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
							<h1>Gallery</h1>

						</div>
					</div>
				</section>

				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="#" data-filter="*" class="active">Show All</a>
								<a href="#" data-filter=".reg">REGIONAL</a>
								<a href="#" data-filter=".mnc">MNC</a>

							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
								<div class="item col-md-3 col-sm-5 col-xs-10 reg">
								<figure>
			        					<img alt="author" src="../files/images/gallery/13.jpg">
			        					<figcaption>
			            					<h3> BizViz Technologies Pvt. Ltd.</h3>
			            					<p>Address: 5th Floor, Modern Profound Tech.Park, Opposite to Ramalayam Temple,Hyderabad, Telangana - 500084</p>
			        					</figcaption>
			    					</figure>
							    </div>



							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="2-image" src="../files/images/gallery/14.png">
			        					<figcaption>
			            					<h3>BlueCube Network</h3>
			            					<p>Address: Gordhan Sky Near Flyover, 301, Jhotwara Rd, Khatipura, Jaipur, Rajasthan 302012</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="3-image" src="../files/images/gallery/15.png">
			        					<figcaption>
			            					<h3>Calsoft Labs</h3>
			            					<p>Address: S. No 320/1/C, Bavdhan, Near DSK Toyota Showroom, Mulshi, Pune, Maharashtra 411021</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="4-image" src="../files/images/gallery/16.jpg">
			        					<figcaption>
			            					<h3>Capgemini IGATE</h3>
			            					<p> Address: S.No. 14, Rajiv Gandhi Infotech Park,Hinjawadi Phase-III, MIDC-SEZ,Village Man, Taluka Mulshi,Pune-411 057,Maharashtra</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="5-image" src="../files/images/gallery/21.png">
			        					<figcaption>
			            					<h3>Daffodil Software Ltd.</h3>
			            					<p>Address: 15th Floor, Building A3 DLF Silokhera SEZ, Sector 30, NH 8, Gurugram, Haryana 122001</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="6-image" src="../files/images/gallery/18.png">
			        					<figcaption>
			            					<h3>Uxarmy Software Pvt Ltd</h3>
			            					<p> Jaipur(Rajasthan) </p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="7-image" src="../files/images/gallery/19.png">
			        					<figcaption>
			            					<h3>CapitalVia Global Research Limited-</h3>
			            					<p></p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="8-image" src="../files/images/gallery/20.png">
			        					<figcaption>
			            					<h3>Crazy Media Labs </h3>
			            					<p>B1, D-847/848, Shreefal Apartments Lt., Malviya Nagar, Jaipur - 302017, Amit Bhardwaj Marg</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/17.png">
			        					<figcaption>
			            						<h3>Xoriant Solutions Pvt Ltd</h3>
			            					<p>Address: A/27, Third Floor, Sigma Center, Infocity, Sector 34, Gurugram, Gurugram, Haryana 122001</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/22.1.png">
			        					<figcaption>
			            					<h3>SachTech Solution</h3>
			            					<p>Address: Plot No 11-A, Cellulosics Rd, Industrial Area, Sector 58, Sahibzada Ajit Singh Nagar, Punjab 160055</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/23.png">
			        					<figcaption>
			            					<h3>In Time Tech</h3>
			            					<p>Address: Jaipur (Rajasthan) 302021</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 reg">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/24.jpg">
			        					<figcaption>
			            					<h3>Maintec Technologies, Pvt. Ltd.</h3>
			            					<p>Address: A 60, First Floor, Sector 2, Noida, Uttar Pradesh 201301</p>
			        					</figcaption>
			    					</figure>
							    </div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
									<li><a href="../recruiters/gallery.php"   >1</a></li>
									<li><a href="../recruiters/gallery1.php" class="current" >2</a></li>

									<li><a href="../recruiters/gallery.php"><i class="fa fa-angle-double-right"></i></a></li>
								</ul>
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
    									<li><a href="../placement/previous1year.php">Previous  year</a></li>

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
