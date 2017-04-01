<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <style>
      body{
	       background: rgb(213,206,166);
       }
    </style>
	
  </head>
  <body>
  
    <center>
      <form method="post" action="search.php">
      <input type="text" name="searchVal" onKeyUp="searchq()"/>
      <input type="submit" name="submit" value="search"/>
      </form>
    </center>
	<!--radio button filter-->
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
	<!--According to language known-->
	<!--Checkboxes-->
	 <form onClick="searchq()" action="search.php">
	 <input type="checkbox" name="check" value="a"/>C<br/>
	 <input type="checkbox" name="check" value="b"/>C++<br/>
	 <input type="checkbox" name="check" value="c"/>JAVA<br/>
	 <input type="checkbox" name="check" value="d"/>ADV. JAVA<br/>
	 <input type="checkbox" name="check" value="e"/>Android<br/>
	 <input type="checkbox" name="check" value="f"/>PHP<br/>
	 <input type="checkbox" name="check" value="g"/>HTML/CSS<br/>
	 <input type="checkbox" name="check" value="h"/>IOT/ROBOTICS/EMBEDED<br/>
	 <input type="checkbox" name="check" value="i"/>PYTHON<br/>
	 <input type="checkbox" name="check" value="j"/>DATABASE-ORACLE/MYSQL/...<br/>
	 </form>

	  
	<!--range filter -->
<!--on the basis of btech aggregate -->
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


	<!--filter according backlogs-->   
      <form method="post" action="search.php">
      <input type="number" name="subm" onKeyUp="searchq()"/>Backlogs
      </form>	   
	
	
    <div style="float:left;width:80%;">
      <div id="output" ></div>
    </div>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!-- <script src="js/jquery-2.2.3.min.js"></script>-->
          <script type="text/javascript">
          function searchq()
              {
			      var subm=$("input[name='subm']").val();
			      var min_range=$("input[name='min_range']").val();
				  var twelve=$("input[name='twelve']").val();
				  var tenth=$("input[name='tenth']").val();
			      var searchtxt=$("input[name='searchVal']").val();
                  var hosteller=$("input[name='hosteller']:checked").val();
				  
				  var check=$("input[name='check']").val();
				  
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
						  'check':check},
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
