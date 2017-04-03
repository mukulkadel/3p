<?php
//Include GP config file && User class
include_once 'gpConfig.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location:' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();


	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );

	//Storing user data into session
	$_SESSION['userData'] = $gpUserData;

	//Render facebook profile data
/*    if(!empty($gpUserData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$gpUserData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $gpUserData['oauth_uid'];
        $output .= '<br/>Name : ' . $gpUserData['first_name'].' '.$gpUserData['last_name'];
        $output .= '<br/>Email : ' . $gpUserData['email'];
        $output .= '<br/>Gender : ' . $gpUserData['gender'];
        $output .= '<br/>Locale : ' . $gpUserData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$gpUserData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>';
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }*/
} else {
	$authUrl = $gClient->createAuthUrl();
	//$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
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

	<title>PDS</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	 <link href="calendar/cala.css" rel="stylesheet">
  <script type="text/javascript" src="calendar/reoccurringEventsCal.js"></script>

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
								<a href="index.php">PDS</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#" class="has-submenu">Acadmic</a>
										<ul class="sub-menu">
											<li><a href="acadmic/planning.php">Planning</a></li>

											<li><a href="acadmic/syllabus.php">syllabus</a></li>
											
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
											<li><a href="recruiters/gallery.php">Gallery</a></li>
											<li><a href="recruiters/present.php">present</a></li>
											<li><a href="recruiters/upcoming.php">upcoming recruiters</a></li>
											
										</ul>
									</li>
									<li><a href="aboutus/about.php">About us</a></li>
									<li><a href="#" class="has-submenu">placement</a>
										<ul class="sub-menu">
											<li><a href="placement/current.php">current</a></li>
											<li><a href="placement/previous1year.php">previous 1 year</a></li>
											<li><a href="placement/previous2year.php">previous 2 year</a></li>
										</ul>
									</li>
									<li><a href="contactus/contact.php">Contact us</a></li>
									<li><a href="internship/internship.php">Internship</a></li>
                  <li><button class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Log in</button></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

        <!-- Login button Popup-->
        <div id="login" class="modal fade" role="dialog" style="margin-top:100px;">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Login with Google+</h4>
                </div>
                <div class="modal-body">
                  <p><center>
                    <a class="btn btn-block btn-social btn-google" style="background-color:#DD4B39;color:#ffffff;width:200px;" href="<?php echo filter_var($authUrl, FILTER_SANITIZE_URL);?>">
                      <span class="fa fa-google"></span> Sign in with Google
                    </a>
                </center> </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

          </div>
        </div>
				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="files/images/def.png" data-fullwidthcentering="on" alt="slide">
									
									
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="files/images/22.png" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Create a Multi Author Blog</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Using Yom you can create multi author Blog platform</div>
									
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="files/images/def.png" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Create an E-commerce Site</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Using Yom your can create a Multi Author E-Commerce Website</div>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				
<!--calender section-->
				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>our system are follow</h2>
							<div class="section-dec"></div>
						</div>
						<div class="service-item col-md-12">
							 <script type="text/javascript">
 								 document.write(droplists());
 							 document.write(createMonth());
 							 </script>
						
						</div>
					</div>
				</section>
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>text must</h4>
						<p class="col-md-10 col-md-offset-1"></p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				

				<section class="call-to-action-3">
					<div class="container">
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8"></h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#">Take it now</a></div>
						</div>
					</div>
				</section>

			
                <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.php">
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
               <li><a href="#">login</a></li>
             
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus/about.php">aboutus</a></li>
               <li><a href="contactus/contact.php">Contact us</a></li>
              <li><a href="internship/internship.php">internship</a></li>
            
             
              
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>placement</h4>
            <ul>
              <li><a href="acadmic/planning.php">planning</a></li>
              <li><a href="acadmic/syllabus.php">syllabus</a></li>
              <li><a href="placement/current.php">current</a></li>
              <li><a href="placement/previous1year.php">previous one year</a></li>
              <li><a href="placement/previous2year.php">previous two year</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
           <div class="links">
          <h4>recruiters</h4>
           <ul>
              <li><a href="recruiters/gallery.php">gallery</a></li>
              <li><a href="recruiters/present.php">present</a></li>
              <li><a href="recruiters/upcoming.php">upcoming</a></li>
              
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
							<li class="menu-item-has-children"><a href="#" >Acadmic</a>
								<ul class="sub-menu">
										<li><a href="acadmic/planning.php">Planning</a></li>
										<li><a href="acadmic/syllabus.php">syllabus</a></li>								
										</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Recruiters</a>
								<ul class="sub-menu">
									<li><a href="recruiters/gallery.php">Gallery</a></li>
									<li><a href="recruiters/present.php">present</a></li>
									<li><a href="recruiters/upcoming.php">upcoming recruiters</a></li>
								</ul>
							</li>
							<li><a href="aboutus/about.php">About us</a></li>
							<li class="menu-item-has-children"><a href="#">placement</a>
								<ul class="sub-menu">
									<li><a href="placement/current.php">current</a></li>
									<li><a href="placement/previous1year.php">previous 1 year</a></li>
									<li><a href="placement/previous2year.php">previous 2 year</a></li>
								</ul>
							</li>
							<li><a href="contactus/contact.php">Contact us</a></li>
							<li><a href="internship/internship.php">Internship</a></li>
<li><button class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Log in</button></li>
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
