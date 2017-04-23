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

	<title>Summer internship | PDS</title>


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
							<h1>Internship</h1>
							<span>Summer Internship</span>
						</div>
					</div>
				</section>

				<section>
					<div class="wrap contentclass" role="document">
						<div id="pageheader" class="titleclass">
							<div class="container">
								<div class="page-header">
									<h1 class="entry-title" itemprop="name">	Summer Internship	</h1>
						   		</div>
						   	</div><!--container-->
						</div><!--titleclass-->

						<div id="content" class="container">
							   	<div class="row">
							     	<div class="main col-md-12" role="main">
											<div class="entry-content" itemprop="mainContentOfPage">
												<p style="text-align: justify;">Students at Poornima place themselves in Summer Internships, with an objective to learn technologies pertaining to their discipline and enhance their technical knowledge with a support of live platform of Industry.</p>
												<p style="text-align: justify;">Engineering, Management and BCA students pursue their 4-6 weeks’ Internships at various organizations keeping in view their skill set and the emerging industrial requirements.</p>
												<ul style="text-align:left;">
													<li style="font-size: 18px;"><strong><a href="http://placement.poornima.org/wp-content/uploads/Internship_Data_Batch_2017_till_27-05-16.pdf" target="_blank">Details For Summer Internship 2016</a></strong></li>
												</ul>
												<p>The Learning Objectives of the summer Internships, induced in Poornimaites are:</p>
												<ol style="text-align: justify;">
													<li style="text-align: justify;">Practical Application of Classroom theory</li>
													<li style="text-align: justify;">Skill enhancement</li>
													<li style="text-align: justify;">Hands on Practice</li>
													<li style="text-align: justify;">Personality Development</li>
													<li style="text-align: justify;">Exposure to real Working Environment</li>
													<li style="text-align: justify;">Confidence building</li>
												</ol>
												<p style="text-align: justify;">Every student ensures the mapping of his Learning Objectives with their Summer Internships.</p>
												<hr>
												<h5 style="text-align: justify;">Popular Industries for B.Tech. Summer Internships in Session 2015</h5>
												<div class="row">
													<div class="col-md-4">
														<table width="310">
															<tbody>
																<tr>
																	<td width="310">NBC</td>
																</tr>
																<tr>
																	<td>Kota Super Thermal Power Power Station</td>
																</tr>
																<tr>
																	<td>Indian Railways</td>
																</tr>
																<tr>
																	<td>220 KV GSS (Across Rajasthan)</td>
																</tr>
																<tr>
																	<td>GSS Electricity Office</td>
																</tr>
																<tr>
																	<td>NTPC</td>
																</tr>
																<tr>
																	<td>RRVNL</td>
																</tr>
																<tr>
																	<td>Airport Authority Of India</td>
																</tr>
																<tr>
																	<td>Shree Cement</td>
																</tr>
																<tr>
																	<td>Omega Electronics</td>
																</tr>
																<tr>
																	<td>BSNL</td>
																</tr>
																<tr>
																	<td>HCL Technologies</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-md-4">
														<table width="259">
															<tbody>
																<tr>
																	<td width="259">All India Radio</td>
																</tr>
																<tr>
																	<td>Girnar Technologies</td>
																</tr>
																<tr>
																	<td>Power Work Department</td>
																</tr>
																<tr>
																	<td>HMT</td>
																</tr>
																<tr>
																	<td>REIL Jaipur</td>
																</tr>
																<tr>
																	<td>Bharat Heavy Electricals Limited</td>
																</tr>
																<tr>
																	<td>Doordarshan</td>
																</tr>
																<tr>
																	<td>Ducat India</td>
																</tr>
																<tr>
																	<td>Hindustan Zinc Limited</td>
																</tr>
																<tr>
																	<td>JDA</td>
																</tr>
																<tr>
																	<td>JVVNNL</td>
																</tr>
																<tr>
																	<td>Pratham Softwares</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-md-4">
														<table width="302">
															<tbody>
																<tr>
																	<td width="302">J.K Laxmi Cement</td>
																</tr>
																<tr>
																	<td>GIPL</td>
																</tr>
																<tr>
																	<td>ITG</td>
																</tr>
																<tr>
																	<td>L&amp;T</td>
																</tr>
																<tr>
																	<td>Hewlett-Packard India Sales Pvt. Ltd.</td>
																</tr>
																<tr>
																	<td>UDB</td>
																</tr>
																<tr>
																	<td>SAIL, Bokaro</td>
																</tr>
																<tr>
																	<td>Bosch Pvt. Ltd.</td>
																</tr>
																<tr>
																	<td>Ceeri Pilani</td>
																</tr>
																<tr>
																	<td>Center for Electronic Governance, Jaipur</td>
																</tr>
																<tr>
																	<td>Felicity Estates Pvt Ltd</td>
																</tr>
																<tr>
																	<td>CIPET</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<hr>
												<h5 style="text-align: justify;">Popular Industries for Management &amp; Commerce Summer Internships in Session 2015</h5>
												<div class="row">
													<div class="col-md-4">
														<table width="310">
															<tbody>
																<tr>
																	<td width="310">Adarsh Prime</td>
																</tr>
																<tr>
																	<td>Amrapali Group</td>
																</tr>
																<tr>
																	<td>Anand Rathi</td>
																</tr>
																<tr>
																	<td>AU Financiers</td>
																</tr>
																<tr>
																	<td>Axis Bank</td>
																</tr>
																<tr>
																	<td>BSL</td>
																</tr>
																<tr>
																	<td>Canara Bank</td>
																</tr>
																<tr>
																	<td>Compucom pvt ltd</td>
																</tr>
																<tr>
																	<td>Exide Life Insaurance</td>
																</tr>
																<tr>
																	<td>SBI Life Insaurance</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-md-4">
														<table width="259">
															<tbody>
																<tr>
																	<td width="259">Larson &amp; Toubro</td>
																</tr>
																<tr>
																	<td>Lemon Tree</td>
																</tr>
																<tr>
																	<td>Linenwalas / Singhal Exports</td>
																</tr>
																<tr>
																	<td>Marudhara Hyundai</td>
																</tr>
																<tr>
																	<td>Midas Electonics</td>
																</tr>
																<tr>
																	<td>Miyan Bazaz Impex</td>
																</tr>
																<tr>
																	<td>NBC</td>
																</tr>
																<tr>
																	<td>Plan EUENTS</td>
																</tr>
																<tr>
																	<td>Riddhi Siddhi Innovation Pvt. Ltd.</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-md-4">
														<table width="302">
															<tbody>
																<tr>
																	<td width="302">Jaipur Rugs</td>
																</tr>
																<tr>
																	<td>Kota Super Thermal Power Plant</td>
																</tr>
																<tr>
																	<td>UAE Exchange</td>
																</tr>
																<tr>
																	<td>Weispun Mumbai</td>
																</tr>
																<tr>
																	<td>HDFC Life insurance</td>
																</tr>
																<tr>
																	<td>Simplex Infrastructure Ltd.</td>
																</tr>
																<tr>
																	<td>G &amp;B Consultancy</td>
																</tr>
																<tr>
																	<td>HDFC Bank</td>
																</tr>
																<tr>
																	<td>Sanghi Motors</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
								  			</div>
										</div><!-- /.main -->
								    </div><!-- /.row-->
						</div><!-- /.content -->
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
                    <li><a href="../placement/activity.php">Placement Activities</a></li>
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
