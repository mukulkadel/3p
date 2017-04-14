<?php
  session_start();

  //admin check
  if(isset($_SESSION["admin"])||!isset($_SESSION["email"]))
    header("location:../login.php");

//Initialization
//  $_SESSION["reg_no"]='PIET/CE/13/001';
  $email=$_SESSION["email"];
  $usr="root";
  $pass="";
  $reg_no = $_SESSION["reg_no"];

    function getlanguage(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      try{
        $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from language where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          $row = $q->fetch();
          for($i=1;$i<count($row)/2;$i++){
            if(isset($row[$i])){
              $output.=$row[$i].", ";
            }
          }
          $output=rtrim($output,", ");
        }
        else{
          $output="No records!";
        }
      }
      catch(PDOException $e){
        echo $e->getMessage();
        echo "<br/>\nConnection error!";
      }
      return $output;
    }
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
          $output="<div class=\"container-fluid\" style=\"margin-top:10px;font-size:1.1em;\">\n";
          $output.="<div class=\"row\">\n";
          $output.="<div class=\"panel panel-info\">\n";
          $output.="<div class=\"panel-heading\">Basic info</div>\n";
          $output.="<div class=\"panel-body\">\n";
          $output.="<table class=\"table\">";
          $output.="<tr>\n<td>"."Name"."</td>\n<td> ".$row["name"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."DOB"."</td>\n<td> ".$row["dob"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Email"."</td>\n<td> ".$row["email"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Alternative email"."</td>\n<td> ".$row["email_alter"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Mobile "."</td>\n<td> ".$row["mobile"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Father's mobile"."</td>\n<td> ".$row["mobile_father"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Higher studies"."</td>\n<td> ".(($row["higher_studies"]=="")?"No":$row["higher_studies"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."Home city"."</td>\n<td> ".$row["home_city"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Knowledge about"."</td>\n<td>".getlanguage()."</td></tr>\n";
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
          $output.="  </div>\n";
          $output.="  </div>\n";
          $output.="  </div>\n";
          $output.="<div class=\"row\">\n";
          $output.="<div class=\"panel panel-info\">\n";
          $output.="<div class=\"panel-heading\">College</div>\n";
          $output.="<div class=\"panel-body\">\n";
          $output.="<table class=\"table\">";
          $output.="<tr>\n<td>"."Registration No"."</td>\n<td> ".$row["reg_no"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."College"."</td>\n<td> ".$row["college"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Branch"."</td>\n<td> ".$row["branch"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Section"."</td>\n<td> ".$row["section"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Training Company"."</td>\n<td> ".$row["tcompany"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Training experience"."</td>\n<td> ".$row["txp"] ."</td></tr>\n";
          $output.="</table>";
          $output.="  </div>\n";
          $output.="  </div>\n";
          $output.="  </div>\n";
          $output.="  </div>\n";
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
    function professional(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      try{
        $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from pro where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          $row = $q->fetch();
          $output="<div class=\"container-fluid\" style=\"text-align:center;font-size:1.2em;\">\n";
            $output.="<div class=\"row\">\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                $output.="  <div class=\"panel-heading\">10th</div>\n";
                  $output.="<div class=\"panel-body\">\n";
                  $output.="  <table class=\"table\">\n";
                    $output.="  <tr><td>Marks</td><td>".$row["marks10"]."/".$row["max10"]."</td></tr>\n";
                    $output.="  <tr><td>Percentage</td><td>".$row["percent10"]."%</td></tr>\n";
                      $output.="<tr><td>Year of pass</td><td>".$row["pass10"]."</td></tr>\n";
                    $output.="</table>\n";
                $output.="  </div>\n";
              $output.="  </div>\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                  $output.="<div class=\"panel-heading\">12th</div>\n";
                $output.="  <div class=\"panel-body\">\n";
                  $output.="  <table class=\"table\">\n";
                    $output.="  <tr><td>Marks</td><td>".$row["marks12"]."/".$row["max12"]."</td></tr>\n";
                    $output.="  <tr><td>Percentage</td><td>".$row["percent12"]."%</td></tr>\n";
                    $output.="  <tr><td>Year of pass</td><td>".$row["pass12"]."</td></tr>\n";
                    $output.="  <tr><td>Board</td><td>".$row["board12"]."</td></tr>\n";
                    $output.="  <tr><td>Medium</td><td>".$row["medium12"]."</td></tr>\n";
                  $output.="  </table>\n";
                $output.="  </div>\n";
              $output.="  </div>\n";
              $output.="  <div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                $output.="  <div class=\"panel-heading\">Diploma</div>\n";
                $output.="  <div class=\"panel-body\">\n";
                if($row["percent_diplo"]!="0"){
                  $output.="    <table class=\"table\">\n";
                  $output.="    <tr><td>Percentage</td><td>".$row["percent_diplo"]."%</td></tr>\n";
                  $output.="    <tr><td>Year</td><td>".$row["year_diplo"]."</td></tr>\n";
                  $output.="  </table>\n";
                }
                else{
                  $output.="No records!";
                }
                $output.="</div>\n";
            $output.="</div>\n";
          $output.="  <div class=\"row\">\n";
              $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                $output.="<div class=\"panel-heading\">SEM-1</div>\n";
                $output.="<div class=\"panel-body\">\n";
                  $output.="<table class=\"table\">\n";
                    $output.="<tr><td>Marks</td><td>".$row["marks_sem1"]."</td></tr>\n";
                    $output.="<tr><td>Percentage</td><td>".$row["percent_sem1"]."%</td></tr>\n";
                    $output.="<tr><td>Backs</td><td>".(($row["result_sem1"]=="0")?"None":$row["result_sem1"])."</td></tr>\n";
                $output.="  </table>\n";
                $output.="</div>\n";
              $output.="</div>\n";
              $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
              $output.="  <div class=\"panel-heading\">SEM-2</div>\n";
                $output.="<div class=\"panel-body\">\n";
                  $output.="<table class=\"table\">\n";
                    $output.="<tr><td>Marks</td><td>".$row["marks_sem2"]."</td></tr>\n";
                    $output.="<tr><td>Percentage</td><td>".$row["percent_sem2"]."%</td></tr>\n";
                    $output.="<tr><td>Backs</td><td>".(($row["result_sem2"]=="0")?"None":$row["result_sem2"])."</td></tr>\n";
                  $output.="</table>\n";
              $output.="  </div>\n";
              $output.="</div>\n";
              $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                $output.="<div class=\"panel-heading\">SEM-3</div>\n";
                $output.="<div class=\"panel-body\">\n";
                  $output.="<table class=\"table\">\n";
                    $output.="<tr><td>Marks</td><td>".$row["marks_sem3"]."</td></tr>\n";
                      $output.="<tr><td>Percentage</td><td>".$row["percent_sem3"]."%</td></tr>\n";
                      $output.="<tr><td>Backs</td><td>".(($row["result_sem3"]=="0")?"None":$row["result_sem3"])."</td></tr>\n";
                    $output.="</table>\n";
                  $output.="</div>\n";
                $output.="</div>\n";
              $output.="</div>\n";
              $output.="<div class=\"row\">\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                  $output.="<div class=\"panel-heading\">SEM-4</div>\n";
                  $output.="<div class=\"panel-body\">\n";
                    $output.="<table class=\"table\">\n";
                      $output.="<tr><td>Marks</td><td>".$row["marks_sem4"]."</td></tr>\n";
                      $output.="<tr><td>Percentage</td><td>".$row["percent_sem4"]."%</td></tr>\n";
                      $output.="<tr><td>Backs</td><td>".(($row["result_sem4"]=="0")?"None":$row["result_sem4"])."</td></tr>\n";
                    $output.="</table>\n";
                  $output.="</div>\n";
                $output.="</div>\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                  $output.="<div class=\"panel-heading\">SEM-5</div>\n";
                  $output.="<div class=\"panel-body\">\n";
                    $output.="<table class=\"table\">\n";
                      $output.="<tr><td>Marks</td><td>".$row["marks_sem5"]."</td></tr>\n";
                      $output.="<tr><td>Percentage</td><td>".$row["percent_sem5"]."%</td></tr>\n";
                    $output.="  <tr><td>Backs</td><td>".(($row["result_sem5"]=="0")?"None":$row["result_sem5"])."</td></tr>\n";
                    $output.="</table>\n";
                  $output.="</div>\n";
                $output.="</div>\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                  $output.="<div class=\"panel-heading\">SEM-6</div>\n";
                  $output.="<div class=\"panel-body\">\n";
                  $output.="  <table class=\"table\">\n";
                      $output.="<tr><td>Marks</td><td>".$row["marks_sem6"]."</td></tr>\n";
                      $output.="<tr><td>Percentage</td><td>".$row["percent_sem6"]."%</td></tr>\n";
                      $output.="<tr><td>Backs</td><td>".(($row["result_sem6"]=="0")?"None":$row["result_sem6"])."</td></tr>\n";
                    $output.="</table>\n";
                $output.="  </div>\n";
                $output.="</div>\n";
              $output.="</div>\n";
              $output.="<div class=\"row\">\n";
                $output.="<div class=\"panel panel-info col-md-4\" style=\"min-width:300px;width:30%;height:250px;margin:10px 10px 10px 10px;\">\n";
                  $output.="<div class=\"panel-heading\">B.Tech.</div>\n";
                  $output.="<div class=\"panel-body\">\n";
                    $output.="<table class=\"table\">\n";
                      $output.="<tr><td>Marks</td><td>".$row["marks_total"]."/".$row["marks_max"]."</td></tr>\n";
                    $output.="  <tr><td>Percentage</td><td>".$row["aggregate"]."%</td></tr>\n";
                    $output.="  <tr><td>Total Backs</td><td>".(($row["backs"]=="0")?"None":$row["backs"])."</td></tr>\n";
                    $output.="</table>\n";
                  $output.="</div>\n";
                $output.="</div>\n";
              $output.="</div>\n";
          $output.="  </div>\n";
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
    function placement(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      try{
        $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from placement where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          $ctr=$q->rowCount();
          $row = $q->fetchAll();
          $output="<table class=\"table\">\n";
          $output.="<tr><td rowspan=\"$ctr\" style=\"padding-top:40px\">Placed in</td>";
          $output.="<td>".$row[0]["company"]."</td></tr>";
          for($i=1;$i<$ctr;$i++){
            $output.="<tr><td>".$row[$i]["company"]."</td></tr>";
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
  if(isset($_POST['action'])&&!empty($_POST['action'])){
    $action = $_POST['action'];
    switch($action){
      case 'personal':personal();
        break;
      case 'professional':professional();
        break;
      case 'placement':placement();
    }
  }
 ?>
