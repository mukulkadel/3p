<?php
  session_start();
try{
  include_once '../check.php';
}
catch(Exception $e){
  header("location:../logout.php");
}

//admin check
if(isset($_SESSION["admin"]))
  header("location:../login.php");

//Initializing variables
  $email=$_SESSION["email"];
  $usr="root";
  $pass="";
  $reg_no = $_SESSION["reg_no"];

  //function for getlanguage
  function setlanguage(){
    global $usr, $pass, $reg_no, $email;
    $output="";
    try{
      $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query="select * from language where reg_no='$reg_no';";
      $q = $con->prepare($query);
      $q->execute();
      $row = $q->fetch();
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"c\" value=\"C\" ".((isset($row["c"]))?"checked":"")."/>C</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"cpp\" value=\"C++\" ".((isset($row["cpp"]))?"checked":"")."/>C++</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"java\" value=\"JAVA\" ".((isset($row["java"]))?"checked":"")."/>Java</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"java_adv\" value=\"ADV. JAVA\" ".((isset($row["java_adv"]))?"checked":"")."/>Advance Java</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"android\" value=\"ANDROID\" ".((isset($row["android"]))?"checked":"")."/>Android</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"php\" value=\"PHP\" ".((isset($row["php"]))?"checked":"")."/>PHP</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"html\" value=\"HTML/CSS\" ".((isset($row["html"]))?"checked":"")."/>HTML/CSS</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"iot\" value=\"IOT/ROBOTIC/EMBEDDED\" ".((isset($row["iot"]))?"checked":"")."/>IOT/Robotic/Embedded</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"python\" value=\"PYTHON\" ".((isset($row["python"]))?"checked":"")."/>Python</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"ruby\" value=\"RUBY\" ".((isset($row["ruby"]))?"checked":"")."/>Ruby</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"php_frame\" value=\"PHP FRAME WORKS\" ".((isset($row["php_frame"]))?"checked":"")."/>PHP Frame Works</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"mysql\" value=\"MYSQL\" ".((isset($row["mysql"]))?"checked":"")."/>MySQL</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"oracle\" value=\"ORACLE\" ".((isset($row["oracle"]))?"checked":"")."/>Oracle</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"net\" value=\"NET\" ".((isset($row["net"]))?"checked":"")."/>.NET</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"javascript\" value=\"JAVASCRIPT\" ".((isset($row["javascript"]))?"checked":"")."/>Javascript</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"objective_c\" value=\"OBJECTIVE C\" ".((isset($row["objective_c"]))?"checked":"")."/>Objective C</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"red_hat\" value=\"RED HAT\" ".((isset($row["red_hat"]))?"checked":"")."/>Red Hat</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"ubuntu\" value=\"UBUNTU\" ".((isset($row["ubuntu"]))?"checked":"")."/>Ubuntu</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"ios\" value=\"IOS\" ".((isset($row["ios"]))?"checked":"")."/>iOS</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"bootstrap\" value=\"BOOTSTRAP/MDBOOTSTRAP\" ".((isset($row["bootstrap"]))?"checked":"")."/>Bootstrap/MDBootstrap</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"matlab\" value=\"MATLAB\" ".((isset($row["matlab"]))?"checked":"")."/>Matlab</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"ml\" value=\"ML/DEEP LEARNING\" ".((isset($row["ml"]))?"checked":"")."/>ML/Deep Learning</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"data_mining\" value=\"DATA MINING\" ".((isset($row["data_mining"]))?"checked":"")."/>Data Mining</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"r\" value=\"R\" ".((isset($row["r"]))?"checked":"")."/>R</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"mongodb\" value=\"MONGODB\" ".((isset($row["mongodb"]))?"checked":"")."/>MongoDB</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"angular_js\" value=\"ANGULAR JS\" ".((isset($row["angular_js"]))?"checked":"")."/>AngularJS</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"node_js\" value=\"NODE JS\" ".((isset($row["node_js"]))?"checked":"")."/>Node.js</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"ms_office\" value=\"MS OFFICE\" ".((isset($row["ms_office"]))?"checked":"")."/>MS Office</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"photoshop\" value=\"PHOTOSHOP\" ".((isset($row["photoshop"]))?"checked":"")."/>Photoshop</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"coral_draw\" value=\"CORAL DRAW\" ".((isset($row["coral_draw"]))?"checked":"")."/>Coral Draw</label>";
      $output.="<label class=\"checkLang\">\n<input type=\"checkbox\" name=\"other\" value=\"other\" ".((isset($row["other"]))?"checked":"")."/>Other";
      $output.="<input type=\"text\" name=\"otherValue\" id=\"otherValue\" class=\"checkLang\" value=\"".$row["other"]."\"/></label>";
    }
    catch(PDOException $e){
      echo $e->getMessage();
      echo "<br/>\nConnection error!";
    }
    return $output;
  }

  //fetching required row from personal table;
function personal(){
    global $usr, $pass, $reg_no, $email;
    $output="";
    try{
      $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query="select * from personal where reg_no='$reg_no';";
      $q = $con->prepare($query);
      $q->execute();
      if($q->rowCount()>0){
        $row = $q->fetch();
        $output="<table class=\"table\">";
        $output.="<tr>\n<td>"."Registration No"."</td>\n<td> ".$row["reg_no"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Name"."</td>\n<td> ".$row["name"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Branch"."</td>\n<td> ".$row["branch"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Section"."</td>\n<td> ".$row["section"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."College"."</td>\n<td> ".$row["college"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Knowledge about"."</td>\n<td style=\"height:150px;width:62%;\"><div style=\"overflow-y:scroll;height:150px;\">".setlanguage()."</div></td></tr>\n";
        $output.="<tr>\n<td>"."DOB"."</td>\n<td> ".$row["dob"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Higher studies"."</td>\n<td> ".(($row["higher_studies"]=="")?"No":$row["higher_studies"]) ."</td></tr>\n";
        $output.="<tr>\n<td>"."Mobile "."</td>\n<td> <input type=\"text\" name=\"mobile\" value=\"".$row["mobile"] ."\"/></td></tr>\n";
        $output.="<tr>\n<td>"."Father's mobile"."</td>\n<td> <input type=\"text\" name=\"mobile_father\" value=\"".$row["mobile_father"] ."\"/></td></tr>\n";
        $output.="<tr>\n<td>"."Email"."</td>\n<td> ".$row["email"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Alternative email"."</td>\n<td> <input type=\"email\" name=\"email_alter\" value=\"".$row["email_alter"] ."\"/></td></tr>\n";
        $output.="<tr>\n<td>"."Home city"."</td>\n<td> ".$row["home_city"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Training Company"."</td>\n<td> ".$row["tcompany"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Training experience"."</td>\n<td> ".$row["txp"] ."</td></tr>\n";
        $output.="<tr>\n<td>"."Hosteller"."</td>\n";
        switch($row["hosteller"]){
          case 'D':$output.="<td>No</td></tr>\n";
            break;
          case 'H':$output.="<td>Yes</td></tr>\n";
            break;
          default:$output.="<td>Unkown</td></tr>\n";
            break;
        }
        $output.="</table>";
      }
      else{
        $output="No records!";
      }
      echo $output;
    }
    catch(PDOException $e){
      echo $e->getMessage();
      echo "<br/>\nConnection error!";
    }
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

	<title>Update details | PDS</title>


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
<style>
.checkLang{
  width: 200px;
  font-weight: normal;
}
input[name=other]:not(:checked)~#otherValue{
  visibility: hidden;
}
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
								<a href="../index.php">PDS</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li><a href="./index.php">Show Details</a></li>
									<li><a href="../internship/internship.php">Internship</a></li>
                  <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

        <section id="details" class="container-fluid" style="margin-top:80px;">
            <div class="col-md-2" style="margin-top:10px;">
              <div class="row">Registration no: <?php echo $_SESSION['reg_no']; ?></div>
              <div class="row">Name: <?php echo $_SESSION['name']; ?></div>
              <div class="row">Email: <?php echo $_SESSION['email']; ?></div>
              <div class="row" style="margin-top:40px;">
              <ul style="list-style-type:none;">
                <li><a href="index.php">Show Details</a></li>
                  <li><a href="./update.php" style="color:#ff0000;">Update</a></li>
                <li><a href="./requests.php">Requests</a></li>
              </ul>
              </div>
            </div>
            <div class="col-md-10">
              <div class="container-fluid">
                <form method="post" action="./pRequest.php">
                <div class="panel panel-default">
                  <div class="panel-heading" style="height:70px;"><span style="font-size:1.3em;">Personal details</span><span style="float: right;"><input class="btn btn-default" type="submit" name="submit" value="Request update"/></span></div>
                  <div class="panel-body">
                    <?php personal(); ?>
                    <input class="btn btn-default" type="submit" name="submit" value="Request update"/>
                  </div>
                </div>
              </form>
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

              <li><a href="../index.php">Home</a></li>
              <li><a href="../aboutus/about.php">aboutus</a></li>
               <li><a href="../contactus/contact.php">Contact us</a></li>
              <li><a href="../internship/internship.php">internship</a></li>



            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>placement</h4>
            <ul>
              <li><a href="../acadmic/planning.php">planning</a></li>
              <li><a href="../acadmic/syllabus.php">syllabus</a></li>
              <li><a href="../placement/current.php">current</a></li>
              <li><a href="../placement/previous1year.php">previous one year</a></li>
              <li><a href="../placement/previous2year.php">previous two year</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
           <div class="links">
          <h4>recruiters</h4>
           <ul>
              <li><a href="../recruiters/gallery.php">gallery</a></li>
              <li><a href="../recruiters/present.php">present</a></li>
              <li><a href="../recruiters/upcoming.php">upcoming</a></li>

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
              <li><a href="#">Show Details</a></li>
              <li><a href="../internship/internship.php">Internship</a></li>
              <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
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


  <!--  ajax calls for data-->
  <script>
      function logout(){
        window.location="../logout.php"
      }
    </script>

</body>
</html>
