<?php
//Include GP config file && User class
include_once 'check.php';

function loginButton($part){
	global $authUrl;
	$output="";
	if($part==0){
		if(isset($_SESSION["email"])){					//logined
			if(!isset($_SESSION["admin"])){
				$output.="<li><a href=\"./home/\">Show Details</a></li>\n";
			}
			elseif(isset($_SESSION["admin"])){
				$output.="<li><a href=\"./admin/\">Search</a></li>\n";
			}
			$output.="<li><button class=\"btn btn-info btn-lg\" onclick=\"logout()\">Log out</button></li>\n";
		}
		elseif(!isset($_SESSION["email"])){
			$output.="<li><button class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#login\">Log in</button></li>\n";
		}
	}
	else{
		if(isset($_SESSION["email"])){
			$output.="<script>\nfunction logout(){\nwindow.location=\"./logout.php\";\n}\n</script>\n";
		}
		else{
			$output.="<div id=\"login\" class=\"modal fade\" role=\"dialog\" style=\"margin-top:120px;\">";
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
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


	<title>PDS</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link href="cala.css" rel="stylesheet">
  	<link href="files/css/addevent.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="reoccurringEventsCal.js"></script>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

	<![endif]-->
	<style>
.mySlides {display:none;}
</style>

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

								<a href="index.php"><img src="logopds.png" width="130px"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="acadmic/index.php" class="has-submenu">Acadmic</a>
										<ul class="sub-menu">
											<li><a href="acadmic/planning.php">Planning</a></li>

											<li><a href="acadmic/syllabus.php">Syllabus</a></li>
											   <li><a href="acadmic/Placement_pre.php">Placement Preparations</a></li>

										</ul>
									</li>
									<li><a href="recruiters/index.php" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
											<li><a href="recruiters/gallery.php">Gallery</a></li>
											<li><a href="recruiters/present.php">Present</a></li>
											<li><a href="recruiters/upcoming.php">Upcoming recruiters</a></li>

										</ul>
									</li>
									<li><a href="aboutus/index.php">About us</a></li>
									<li><a href="placement/index.php" class="has-submenu">Placement</a>
										<ul class="sub-menu">
											<li><a href="placement/activity.php">Activities</a></li>
											<li><a href="placement/current.php">Current</a></li>
											<li><a href="placement/previous1year.php">Previous 1 year</a></li>



										</ul>
									</li>
									<li><a href="contactus/index.php">Contact us</a></li>
									<li><a href="internship/index.php" class="has-submenu">Internship</a>
										<ul class="sub-menu">
											<li><a href="internship/Summer_internship.php">Summer Internship</a></li>
											<li><a href="internship/Foreign_internship.php">Foreign Internship</a></li>
											<li><a href="internship/internship_details.php">Internship Details</a></li>
										</ul>
									</li>
									<!-- Login button -->
								  <?php echo loginButton(0); ?>
								</ul>
							</nav>
						</div>
					</div>
				</header>
				<br><br>

        <!-- Login button Popup-->
				<?php echo loginButton(1); ?>
				<br><br><br>

		<!--slider-->

<div class="w3-content w3-display-container">
  <img class="mySlides" src="files/images/1.JPG" style="width:100%" >
  <img class="mySlides" src="files/images/22.png" style="width:100%" >
  <img class="mySlides" src="files/images/11.png" style="width:100%" >
  <img class="mySlides" src="files/images/4.JPG" style="width:100%" >
  <img class="mySlides" src="files/images/123.png" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>

<!--/slider-->
<!--calender section-->
				<section>
					<div class="container">
						<div class="section-heading" style="background-color: #000000">
							<h2>our system are follow</h2>
							<div class="section-dec"></div>
						</div>
						<div class="col-md-12" align="center">
							<div id="showCal" class="rounded">
								<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=poornima.org_r56krr5c58a3vjfimn0fbru7i8%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=Asia%2FCalcutta" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
							</div>
						</div>

						<?php

						//add event button for admin only
					if(isset($_SESSION["admin"])){
						echo "<div align=\"center\">\n";
							echo "<!-- 2. Include script -->\n";
						    echo "<script type=\"text/javascript\">(function () {\n";
						            echo "if (window.addtocalendar)if(typeof window.addtocalendar.start == \"function\")return;\n";
						            echo "if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;\n";
						                echo "var d = document, s = d.createElement('script'), g = 'getElementsByTagName';\n";
						                echo "s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;\n";
						                echo "s.src = 'addevent.js';\n";
						                echo "var h = d[g]('body')[0];h.appendChild(s); }})();\n";
						    echo "</script>\n";

						    echo "<!-- 3. Place event data -->\n";
						    echo "<span class=\"addtocalendar atc-style-blue\">\n";
						        echo "<var class=\"atc_event\">\n";
						            echo "<var class=\"atc_date_start\">".date('Y-m-d H:i:s')."</var>\n";
						            echo "<var class=\"atc_date_end\">".date('Y-m-d H:i:s')."</var>\n";
						            echo "<var class=\"atc_timezone\">Asia/Kolkata</var>\n";
						            echo "<var class=\"atc_title\">Event_Title</var>\n";
						            echo "<var class=\"atc_description\">Event_Description</var>\n";
						            echo "<var class=\"atc_location\">Event_location</var>\n";
						            echo "<var class=\"atc_organizer\">Event_coordinator</var>\n";
						            echo "<var class=\"atc_organizer_email\">".$_SESSION["email"]."</var>\n";
						        echo "</var>\n";
						    echo "</span>\n";
						echo "</div>\n";
					}
						?>
				</section>


    <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
          <a href="index.php"><img src="logopds.png" width="130px"></a>

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
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus/index.php">About us</a></li>
               <li><a href="contactus/index.php">Contact us</a></li>
              <li><a href="internship/index.php">Internship</a></li>



            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Placement</h4>
            <ul>
              <li><a href="acadmic/planning.php">Planning</a></li>
              <li><a href="acadmic/syllabus.php">Syllabus</a></li>
              <li><a href="placement/activity.php">Placement Activities</a></li>
              <li><a href="placement/index.php">Current</a></li>
              <li><a href="placement/previous1year.php">Previous one year</a></li>

            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
           <div class="links">
          <h4>Recruiters</h4>
           <ul>
              <li><a href="recruiters/gallery.php">Gallery</a></li>
              <li><a href="recruiters/present.php">Present</a></li>
              <li><a href="recruiters/upcoming.php">Upcoming</a></li>

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
							<li><a href="index.php">Home</a></li>
							<li class="menu-item-has-children"><a href="/acadmic/index.php" >Acadmic</a>
								<ul class="sub-menu">
										<li><a href="acadmic/planning.php">Planning</a></li>
										<li><a href="acadmic/syllabus.php">Syllabus</a></li>
										   <li><a href="sacadmic/Placement_pre.php">Placement Preparations</a></li>
										</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Recruiters</a>
								<ul class="sub-menu">
									<li><a href="recruiters/gallery.php">Gallery</a></li>
									<li><a href="recruiters/present .php">Present</a></li>
									<li><a href="recruiters/upcoming.php">Upcoming recruiters</a></li>

								</ul>
							</li>
							<li><a href="aboutus/index.php">About us</a></li>
							<li class="menu-item-has-children"><a href="#">Placement</a>
								<ul class="sub-menu">
								<li><a href="placement/activity.php"> Activities</a></li>
									<li><a href="placement/current.php">Current</a></li>
									<li><a href="placement/previous1year.php">Previous 1 year</a></li>


								</ul>
							</li>
							<li><a href="contactus/index.php">Contact us</a></li>
							<li class="menu-item-has-children"><a href="#">Internship</a>
								<ul class="sub-menu">
									<li><a href="internship/Summer_internship.php">Summer Internship</a></li>
									<li><a href="internship/Foregin_internship.php">Foreign Internship</a></li>
									<li><a href="internship/internship_details.php">Internship Details</a></li>
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




	<script type="text/javascript" src="files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="files/js/plugins.js"></script>
	<script type="text/javascript" src="files/js/custom.js"></script>

</body>
</html>
