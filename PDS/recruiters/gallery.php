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
								<a href="#" data-filter=".furniture">REGINOL</a>
								<a href="#" data-filter=".wallpaper">MNC</a>

							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
								<div class="item col-md-3 col-sm-5 col-xs-10 furniture">
								<figure>
			        					<img alt="author" src="../files/images/gallery/1.jpg">
			        					<figcaption>
			            					<h3>Majestic Technosoft Pvt. Ltd.</h3>
			            					<p>Majestic Technosoft’s award winning web design and digital marketing experts have helped hundreds of local, national and international clients achieve new levels of success through exemplary site designs, optimum web development and innovative & intelligent marketing campaigns.</p>
			        					</figcaption>
			    					</figure>
							    </div>



							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper">
							  		<figure>
			        					<img alt="2-image" src="../files/images/gallery/2.png">
			        					<figcaption>
			            					<h3>Noto IT Solutions</h3>
			            					<p>The company commenced its operations in Dot Net, PHP, Mobile Technology, Digital Marketing, SEO, Agile, IOS8, Windows 8.1, Android Lollipop, PhoneGap, Unity, SharePoint2013, Drupal, Joomla, Azure, Amazon web service, Magento and Laravel.</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 furniture">
							  		<figure>
			        					<img alt="3-image" src="../files/images/gallery/3.png">
			        					<figcaption>
			            					<h3>Cognizant</h3>
			            					<p>Cognizant is an American multinational corporation that provides digital, technology, consulting, and operations services. </p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper">
							  		<figure>
			        					<img alt="4-image" src="../files/images/gallery/4.png">
			        					<figcaption>
			            					<h3>Activant Solutions</h3>
			            					<p>Activant Solutions contributes to the continuous improvement of education and delivers best value. These services are delivered under direct contract or in partnership with private or public sector organizations.</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 furniture">
							  		<figure>
			        					<img alt="5-image" src="../files/images/gallery/5.jpg">
			        					<figcaption>
			            					<h3>Appirio</h3>
			            					<p>Appirio is a global services company that helps customers create next-generation Worker & Customer Experiences using the latest cloud technologies. </p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 furniture">
							  		<figure>
			        					<img alt="6-image" src="../files/images/gallery/6.png">
			        					<figcaption>
			            					<h3>ARVA SOFTWARE</h3>
			            					<p>Arva SoftwareSolution is an Innovative, Leading-edge BPO and IT Solutions Provider. </p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 furniture">
							  		<figure>
			        					<img alt="7-image" src="../files/images/gallery/7.png">
			        					<figcaption>
			            					<h3>Infosys</h3>
			            					<p>Infosys Limited is an Indian multinational corporation that provides business consulting, information technology .</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper ">
							  		<figure>
			        					<img alt="8-image" src="../files/images/gallery/8.png">
			        					<figcaption>
			            					<h3>Metacube Software</h3>
			            					<p>We are a leading software product development services company, partnering with both start-ups and established players globally in their innovation journey. </p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/9.png">
			        					<figcaption>
			            					<h3>Nagarro</h3>
			            					<p>Nagarro is a custom software development and business consulting company that provides consulting and technology services to its clients.</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/10.png">
			        					<figcaption>
			            					<h3>Tata Consultancy Services</h3>
			            					<p>Tata Consultancy Services' IT services, consulting and business solutions deliver real results to global.</p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 wallpaper">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/11.png">
			        					<figcaption>
			            					<h3>BigStep Technologies</h3>
			            					<p></p>
			        					</figcaption>
			    					</figure>
							    </div>
							    <div class="item col-md-3 col-sm-5 col-xs-10 furniture ">
							  		<figure>
			        					<img alt="9-image" src="../files/images/gallery/12.png">
			        					<figcaption>
			            					<h3>Wipro</h3>
			            					<p>Wipro demerged its non-IT businesses into a separate companies to bring in more focus on independent businesses.</p>
			        					</figcaption>
			    					</figure>
							    </div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
									<li><a href="../recruiters/gallery.php"  class="current" >1</a></li>
									<li><a href="../recruiters/gallery1.php" >2</a></li>
									<li><a href="../recruiters/gallery2.php">3</a></li>
									<li><a href="../recruiters/gallery1.php"><i class="fa fa-angle-double-right"></i></a></li>
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
