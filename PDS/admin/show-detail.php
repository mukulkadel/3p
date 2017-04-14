<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <button id="personal" class="tabs">Personal</button>
  <button id="professional" class="tabs">Professional</button>
  <button id="placement" class="tabs">Placement</button>
  <div id="output"></div>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!--<script src="js/jquery-2.2.3.min.js"></script>-->
  <script>
    $(document).ready(function(){
      $("#personal").click(function(){
        $.ajax({
          type:'post',
          url:'ajax.php',
          data:{action:'personal'},
          success:function(out){
            $("#output").html(out);
          }
        });
      });
        $("#professional").click(function(){
          $.ajax({
            type:'post',
            url:'ajax.php',
            data:{action:'professional'},
            success:function(out){
              $("#output").html(out);
            }
          });
        });
          $("#placement").click(function(){
            $.ajax({
              type:'post',
              url:'ajax.php',
              data:{action:'placement'},
              success:function(out){
                $("#output").html(out);
              }
            });
          });
    });
  </script>
</body>
</html>
