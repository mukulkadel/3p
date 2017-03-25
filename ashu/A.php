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
      <input type="text" name="searchVal" onkeyup="searchq()"/>
      <input type="submit" name="submit" value="search"/>
      </form>
    </center>
    <div style="float:left;width:20%;min-width:150px;">
        Hosteller <br/>
        <form onchange="searchq()">
          <input type="radio" name="hosteller" value="H" />Yes<br/>
          <input type="radio" name="hosteller" value="D" />NO<br/>
          <br/>
          <br/>
          
        </form>
    </div>
    <div style="float:left;width:80%;">
      <div id="output" ></div>
    </div>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!-- <script src="js/jquery-2.2.3.min.js"></script>-->
          <script type="text/javascript">
          function searchq()
              {
                  var searchtxt=$("input[name='searchVal']").val();
                  var hosteller=$("input[name='hosteller']:checked").val();
                  $.ajax({
                    type:'post',
                    url:'search.php',
                    data:{'searchVal':searchtxt,
                          'hosteller':hosteller},
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
