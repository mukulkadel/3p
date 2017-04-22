<?php

session_start();

//admin check & login check
if(!isset($_SESSION["admin"])||!isset($_SESSION["email"]))
  header("location:../login.php");

?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>

 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Requests | PDS</title>


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
                  <li><a href="./index.php">Search</a></li>
                  <li><a href="./uploadData.php">Upload</a></li>
                  <li><a href="./requests.php">Requests</a></li>
                  <li><a href="./addAdmins.php">Admins</a></li>
                  <li><a href="../placement/index.php">Placement</a></li>
                  <li><a href="../internship/index.php">Internship</a></li>
                  <li><button class="btn btn-info btn-lg" onclick="logout()">Log out</button></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>


				<section class="contact-map-wrapper">
          <div class="container">
            <div class="row" style="margin-top:15px;">
              <button id="ALL" class="btn btn-default requestFilter" onclick="display('ALL')">All</button>
              <button id="ACCEPTED" class="btn btn-default requestFilter" onclick="display('ACCEPTED')">Accepted</button>
              <button id="PENDING" class="btn btn-default requestFilter" onclick="display('PENDING')">Pending</button>
              <button id="REJECTED" class="btn btn-default requestFilter" onclick="display('REJECTED')">Rejected</button>
            </div>
            <div class="row">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <span>Requests</span>
                  <div style="float:right"><form><label>Search:</label><input id="searchValue" type="search" onkeyup="display()" style="color:#000000;" value="<?php echo urldecode($_GET["searchValue"]); ?>"/></form></div>
                </div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr><th>Request ID</th><th>Registration no.</th><th>Name</th><th>Status</th><th style="width:150px;"></th></tr>
                    </thead>
                    <tbody id="output">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="viewRequest" class="modal fade" role="dialog" style="margin-top:7%;">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Request Details</h4>
              </div>
              <div class="modal-body">
                <p>
                  <table class="table table-hover">
                    <tr><td>Request ID:</td><td id="requestId"></td></tr>
                    <tr><td>Registration no:</td><td id="reg_no"></td></tr>
                    <tr><td>Name:</td><td id="name"></td></tr>
                    <tr><td>Status:</td><td id="status"></td></tr>
                  </table>
                  <table class="table" id="requestContainer"></table>
                  </table>
                </p>
              </div>
              <div class="modal-footer">
                <span id="viewButtons"></span>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
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
                  <li><a href="../recruiters/index.php">Present</a></li>
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
              <li><a href="./index.php">Search</a></li>
              <li><a href="./uploadData.php">Upload</a></li>
              <li><a href="./requests.php">Requests</a></li>
              <li><a href="./addAdmins.php">Admins</a></li>
              <li><a href="../placement/index.php">Placement</a></li>
              <li><a href="../internship/index.php">Internship</a></li>
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


	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <script type="text/javascript">
   //previous display mode
   var pmode;
   function viewDetails(req_id){
     $.ajax({
       type:"post",
       url:"./prequests.php",
       data:{"action":"viewDetails",
            "id":req_id},
        dataType:"json",
        success:function(out){
          $("#requestId").html(out["id"]);
          $("#reg_no").html(out["reg_no"]);
          $("#name").html(out["name"]);
          $("#status").html(out["status"]);
          $("#requestContainer").html(out["data"]);
          $("#viewButtons").html(out["viewButtons"]);
        }
     });
   }
   function acceptRequest(req_id){
     $.ajax({
       type:"post",
       url:"./prequests.php",
       data:{action:"acceptRequest",
            "id":req_id},
       success:function(out){
         display("ALL");
       }
      });
   }
   function rejectRequest(req_id){
     $.ajax({
       type:"post",
       url:"./prequests.php",
       data:{"action":"rejectRequest",
            "id":req_id},
       success:function(out){
         display("ALL");
       }
      });
   }
   function display(mode){
     var name = $("#searchValue").val();
     //initializing if mode not specified
     if(typeof(mode)=="undefined") mode=pmode;

     $.ajax({
       type:"post",
       url:"./prequests.php",
       data:{"action":"display",
             "mode":mode,
            "name":name},
       success:function(out){
         $("#output").html(out);
       }
     });
     pmode=mode;
   }
   $(document).ready(function(){
     display("ALL");
     $("#ALL").click(function(){
       $(".requestFilter").attr("class","btn btn-default requestFilter");
       $("#ALL").attr("class","btn requestFilter");
     });
     $("#PENDING").click(function(){
       $(".requestFilter").attr("class","btn btn-default requestFilter");
       $("#PENDING").attr("class","btn requestFilter");
     });
     $("#ACCEPTED").click(function(){
       $(".requestFilter").attr("class","btn btn-default requestFilter");
       $("#ACCEPTED").attr("class","btn requestFilter");
     });
     $("#REJECTED").click(function(){
       $(".requestFilter").attr("class","btn btn-default requestFilter");
       $("#REJECTED").attr("class","btn requestFilter");
     });
   });
   function logout(){
     window.location="../logout.php"
   }
   </script>


</body>
</html>
