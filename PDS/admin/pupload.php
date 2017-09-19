<?php
  $status="f";
  if(isset($_POST["submit"])&&$_POST["submit"]=="Upload"){
    if($_FILES["file"]["type"]!="text/csv"){
      $status="f";
      header("location:uploadData.php?status=$status");
    }
    $usr="root";
    $pass="";
    $tmp = $_FILES["file"]["tmp_name"];
    shell_exec("chmod a+rw $tmp;");
    try{
      $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //Uploading in personal table
      $query = "load data INFILE '$tmp' INTO TABLE personal fields TERMINATED by ',' enclosed by '\"' lines TERMINATED by '\\n' (@col1,@col2,@col3,@col4,@col5,@col6,@col7,@col8,@col9,@col10,@col11,@col12,@col13,@col14,@col15,@col16,@col17,@col18,@col19,@col20,@col21,@col22,@col23,@col24,@col25,@col26,@col27,@col28,@col29,@col30,@col31,@col32,@col33,@col34,@col35,@col36,@col37,@col38,@col39,@col40,@col41,@col42,@col43,@col44,@col45,@col46,@col47,@col48,@col49,@col50) set reg_no=@col1,name=@col2,branch=@col4,section=@col5,college=@col6,dob=@col7,higher_studies=@col42,mobile=@col43,mobile_father=@col44,email=@col45,email_alter=@col46,home_city=@col47,tcompany=@col48,txp=@col49,hosteller=@col50;";

      $con->exec($query);

      //Uploading in professional table
      $query = "load data INFILE '$tmp' INTO TABLE pro fields TERMINATED by ',' enclosed by '\"' lines TERMINATED by '\\n' (@col1,@col2,@col3,@col4,@col5,@col6,@col7,@col8,@col9,@col10,@col11,@col12,@col13,@col14,@col15,@col16,@col17,@col18,@col19,@col20,@col21,@col22,@col23,@col24,@col25,@col26,@col27,@col28,@col29,@col30,@col31,@col32,@col33,@col34,@col35,@col36,@col37,@col38,@col39,@col40,@col41,@col42,@col43,@col44,@col45,@col46,@col47,@col48,@col49,@col50) set reg_no=@col1,max10=@col8,marks10=@col9,percent10=@col10,pass10=@col11,medium12=@col12,max12=@col13,marks12=@col14,percent12=@col15,pass12=@col16,board12=@col17,percent_diplo=@col18,year_diplo=@col19,marks_sem1=@col20,percent_sem1=@col21,result_sem1=@col22,marks_sem2=@col23,percent_sem2=@col24,result_sem2=@col25,marks_sem3=@col26,percent_sem3=@col27,result_sem3=@col28,marks_sem4=@col29,percent_sem4=@col30,result_sem4=@col31,marks_sem5=@col32,percent_sem5=@col33,result_sem5=@col34,marks_sem6=@col35,percent_sem6=@col36,result_sem6=@col37,marks_total=@col38,marks_max=@col39,aggregate=@col40,backs=@col41;";

      $con->exec($query);

      //Uploading in language table
      $query = "load data INFILE '$tmp' INTO TABLE language fields TERMINATED by ',' enclosed by '\"' lines TERMINATED by '\\n' (@col1,@col2,@col3,@col4,@col5,@col6,@col7,@col8,@col9,@col10,@col11,@col12,@col13,@col14,@col15,@col16,@col17,@col18,@col19,@col20,@col21,@col22,@col23,@col24,@col25,@col26,@col27,@col28,@col29,@col30,@col31,@col32,@col33,@col34,@col35,@col36,@col37,@col38,@col39,@col40,@col41,@col42,@col43,@col44,@col45,@col46,@col47,@col48,@col49,@col50) set reg_no=@col1;";

      $con->exec($query);

      //For success upload
      $status="success";
    }
    catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }
  }
 header("location:uploadData.php?status=$status");
 ?>
