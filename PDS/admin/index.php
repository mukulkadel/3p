<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>

 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>FILTERS</title>


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
	<script type="text/javascript">
       $(document).ready(function(){
	   $('#slider').slider();
	   });
	</script>

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
									<li><a href="#" class="has-submenu">Acadmic</a>
										<ul class="sub-menu">
											<li><a href="../acadmic/planning.php">Planning</a></li>

											<li><a href="../acadmic/syllabus.php">syllabus</a></li>
											
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Recruiters</a>
										<ul class="sub-menu">
											<li><a href="../recruiters/blog.php">Blog Classic</a></li>
											<li><a href="../recruiters/blog-grid.php">Blog Grid</a></li>
											<li><a href="../recruiters/blog-single.php">Single Post</a></li>
										</ul>
									</li>
									<li><a href="../aboutus/about.php">About us</a></li>
									<li><a href="#" class="has-submenu">placement</a>
										<ul class="sub-menu">
											<li><a href="../placement/current.php">current</a></li>
											<li><a href="../placement/previous1year.php">previous 1 year</a></li>
											<li><a href="../placement/previous2year.php">previous 2 year</a></li>
										</ul>
									</li>
									<li><a href="../contactus/contact.php">Contact us</a></li>
									<li><a href="#">Internship</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				
				<section class="contact-map-wrapper">
					<div class="container">
<div class="col-sm-3 col-md-3">
					
					
					<div class="container-fluid">
					 <form method="post" action="search.php">
      <input type="text" name="searchVal" onKeyUp="searchq()"/>
      <input type="submit" name="submit" value="search"/>
      </form>
	  
	   <div style="float:left;width:20%;min-width:150px;">
        Hosteller <br/>
        <form onchange="searchq()">
          <input type="radio" name="hosteller" value="H" />Yes<br/>
          <input type="radio" name="hosteller" value="D" />NO<br/>
		  <input type="radio" name="hosteller" value="L" checked="checked"/>NO choice<br/>
		  <br/>
          <br/>
         </form>
    </div>
	<br/>
	</div>
	<!--According to language known-->
	<!--Checkboxes-->
	<div class="container-fluid" style="overflow-y:scroll; height:200px">
	On the bases of languages
	 <form  method="post" action="search.php" onClick="searchq()">
	 <input type="checkbox" name="a" value="C" />C<br/>
	 <input type="checkbox" name="b" value="CPP" />C++<br/>
	 <input type="checkbox" name="c" value="JAVA"/>JAVA<br/>
	 <input type="checkbox" name="d" value="ADVANCE_JAVA" />ADV. JAVA<br/>
	 <input type="checkbox" name="e" value="ANDROID" />Android<br/>
	 <input type="checkbox" name="f" value="PHP"/>PHP<br/>
	 <input type="checkbox" name="g" value="HTML/CSS" />HTML/CSS<br/>
	 <input type="checkbox" name="h" value="IOT/ROBOTICS/EMBEDED"/>IOT/ROBOTICS/EMBEDED<br/>
	 <input type="checkbox" name="i" value="PYTHON" />PYTHON<br/>
	 <input type="checkbox" name="j" value="RUBY"/>DRUBY<br/>
	 <input type="checkbox" name="k" value="PHP_FRAME" />PHP_FRAME<br/>
	 <input type="checkbox" name="l" value="MYSQL" />MYSQL<br/>
	 <input type="checkbox" name="m" value="ORACLE" />ORACLE<br/>
	 <input type="checkbox" name="n" value=".NET" />.NET<br/>
	 <input type="checkbox" name="o" value="JAVA_SCRIPT" />JAVASCRIPT<br/>
	 <input type="checkbox" name="p" value="OBJECTIVE_C" />OBJECTIVE C<br/>
	 <input type="checkbox" name="q" value="RED_HAT" />RED HAT<br/>
	 <input type="checkbox" name="r" value="UBUNTU" />UBUNTU<br/>
	 <input type="checkbox" name="s" value="IOS" />IOS<br/>
	 <input type="checkbox" name="t" value="BOOTSTRAP/MDB_BOOTSTRAP" />BOOTSTRAP/MDBBOOTSTRAP<br/>
	 <input type="checkbox" name="u" value="MATLAB" />MATLAB<br/>
	 <input type="checkbox" name="v" value="ML/DEEP_LEARNING" />ML/DEEP LEARNING<br/>
	 <input type="checkbox" name="w" value="DATA_MINING" />DATA MINING<br/>
	 <input type="checkbox" name="x" value="R" />R<br/>
	 <input type="checkbox" name="y" value="MONGODB" />MONGODB<br/>
	 <input type="checkbox" name="z" value="ANGULAR_JS" />ANGULAR JS<br/>
	 <input type="checkbox" name="aa" value="NODE_JS" />NODE JS<br/>
	 <input type="checkbox" name="ab" value="MS_OFFICE" />MS OFFICE<br/>
	 <input type="checkbox" name="ac" value="PHOTOSHOP" />PHOTOSHOP<br/>
	 <input type="checkbox" name="ad" value="CORAL_DRAW" />CORAL DRAW<br/>
	 <input type="checkbox" name="ae" value="OTHERS" />OTHERS<br/>
	
	 
	 </form>
	 
	 <br/>
	  <br/>
	   <br/>
    </div>
	
	
	<div class="container-fluid">
	   Max-marks:<span id="spanoutput"></span><br/>
	   <label for="txtminmarks">minimum marks</label><br/><br/>
	   <input type="text" id="txtminmarks"/><br/><br/>
	   <label for="txtmaxmarks">maximum marks</label><br/><br/>
	   <input type="text" id="txtmaxmarks"/><br/><br/>
	</div>
	  
	<!--range filter -->
<!--on the basis of btech aggregate -->
	<div class="container-fluid">
 <form onchange="searchq()" method="post" action="search.php">
 <input type="range" min="0" max="100" id="min_range" name="min_range" step="0" value="100"></br>
		<!--12th aggregate -->
<span id="range"> </span>
	  </form>
	  
<!--12th aggregate -->	  
<form method="post" onchange="searchq()" action="search.php">
<input type="range" min="0"  max="100" id="twelve" name="twelve" step="0" value="100"></br>
<span id="range1"> </span>
</form>	

<!--10th aggregate -->
<form onchange="searchq()" method="post" action="search.php">
<input type="range" min="0" max="100" id="tenth" name="tenth" step="0" value="100"></br>
<span id="range2"></span>
</form>  
</div>


<div class="container-fluid">
	<!--filter according backlogs-->   
      <form method="post" action="search.php">
      <input type="number" name="subm" onKeyUp="searchq()"/>Backlogs
      </form>	   
	</div>
	
	
</div>
					
				
					
<div class="col-sm-9 col-md-9"> <div class="container-fluid" id="output"> </div>   </div>
					</div>
					
					
				</section>
				<div id="import">
				<form action="excel.php" method="post">
				<input type="submit" name="export_excel" class="btn-btn-sucess" value="Export to excel"/>
				
				</form>
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
							<li class="menu-item-has-children"><a href="#" >Acadmic</a>
								<ul class="sub-menu">
										<li><a href="../acadmic/planning.php">Planning</a></li>
										<li><a href="../acadmic/syllabus.php">syllabus</a></li>								
										</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Recruiters</a>
								<ul class="sub-menu">
									<li><a href="../recruiters/gallery.php">Gallery</a></li>
									<li><a href="../recruiters/present.php">present</a></li>
									<li><a href="../recruiters/upcoming.php">upcoming recruiters</a></li>
								</ul>
							</li>
							<li><a href="aboutus/about.php">About us</a></li>
							<li class="menu-item-has-children"><a href="#">placement</a>
								<ul class="sub-menu">
									<li><a href="../placement/current.php">current</a></li>
									<li><a href="../placement/previous1year.php">previous 1 year</a></li>
									<li><a href="../placement/previous2year.php">previous 2 year</a></li>
								</ul>
							</li>
							<li><a href="../contactus/contact.php">Contact us</a></li>
							<li><a href="../internship/internship.php">Internship</a></li>
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
          function searchq()
              {
			      var subm=$("input[name='subm']").val();
			      var min_range=$("input[name='min_range']").val();
				  var twelve=$("input[name='twelve']").val();
				  var tenth=$("input[name='tenth']").val();
			      var searchtxt=$("input[name='searchVal']").val();
                  var hosteller=$("input[name='hosteller']:checked").val();
				  var a=$("input[name='a']:checked").val();
				  var b=$("input[name='b']:checked").val();
				   var c=$("input[name='c']:checked").val();
				  var d=$("input[name='d']:checked").val();
				  var e=$("input[name='e']:checked").val();
				  var f=$("input[name='f']:checked").val();
				  var g=$("input[name='g']:checked").val();
				  var h=$("input[name='h']:checked").val();
				  var i=$("input[name='i']:checked").val();
				  var j=$("input[name='j']:checked").val();
				  var k=$("input[name='k']:checked").val();
				  var l=$("input[name='l']:checked").val();
				  var m=$("input[name='m']:checked").val();
				  var n=$("input[name='n']:checked").val();
				  var o=$("input[name='o']:checked").val();
				  var p=$("input[name='p']:checked").val();
				  var q=$("input[name='q']:checked").val();
				  var r=$("input[name='r']:checked").val();
				  var s=$("input[name='s']:checked").val();
				  var t=$("input[name='t']:checked").val();
				  var u=$("input[name='u']:checked").val();
				  var v=$("input[name='v']:checked").val();
				  var w=$("input[name='w']:checked").val();
				  var x=$("input[name='x']:checked").val();
				  var y=$("input[name='y']:checked").val();
				  var z=$("input[name='z']:checked").val();
				  var aa=$("input[name='aa']:checked").val();
				  var ab=$("input[name='ab']:checked").val();
				  var ac=$("input[name='ac']:checked").val();
				  var ad=$("input[name='ad']:checked").val();
				  var ae=$("input[name='ae']:checked").val();


				  $("#range").text("B.TECH Aggregate less than:"+min_range);
				  $("#range1").text("12th Aggregate less than:"+twelve);
				  $("#range2").text("10th Aggregate less than:"+tenth);
                  $.ajax({
                    type:'post',
                    url:'search.php',
                    data:{'searchVal':searchtxt,
                          'hosteller':hosteller,
						  'min_range':min_range,
						  'twelve':twelve,
						  'tenth':tenth,
						  'subm':subm,
						 'a':a,'b':b,'c':c,'d':d,'e':e,
						 'f':f,'g':g,'h':h,'i':i,'j':j,
						 'k':k,'l':l,'m':m,'n':n,'o':o,
						 'p':p,'q':q,'r':r,'s':s,'t':t,
						 'u':u,'v':v,'w':w,'x':x,'y':y,
						 'z':z,'aa':aa,'ab':ab,'ac':ac,
						 'ad':ad,'ae':ae,},
                    success:function(out){
                      $("#output").html(out);
                    }
                  });


              }
              function showDetails(reg_no){
                $.ajax({
                  type:'post',
                  url:'search.php',
                  data:{'reg_no':reg_no},
                  success:function(out){
                    window.location='show-detail.php'
                  }
                });
              }
          </script>
    

</body>
</html>



