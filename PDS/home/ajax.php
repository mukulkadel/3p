<?php
  session_start();

//Initialization
//  $_SESSION["reg_no"]='PIET/CE/13/001';
  $email=$_SESSION["email"];
  $usr="root";
  $pass="";
  $reg_no = $_SESSION["reg_no"];


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
          $output.="<tr>\n<td>"."DOB"."</td>\n<td> ".$row["dob"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Higher studies"."</td>\n<td> ".(($row["higher_studies"]=="")?"No":$row["higher_studies"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."Mobile "."</td>\n<td> ".$row["mobile"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Father's mobile"."</td>\n<td> ".$row["mobile_father"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Email"."</td>\n<td> ".$row["email"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Alternative email"."</td>\n<td> ".$row["email_alter"] ."</td></tr>\n";
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
          $output="<table class=\"table\">";
          $output.="<tr>\n<td>"."10th marks"."</td>\n<td> ".$row["marks10"]."/".$row["max10"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."10th percentage"."</td>\n<td> ".$row["percent10"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."10th YOP"."</td>\n<td> ".$row["pass10"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."12th medium"."</td>\n<td> ".$row["medium12"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."12th marks"."</td>\n<td> ".$row["marks12"]."/".$row["max12"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."12th percentage"."</td>\n<td> ".$row["percent12"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."12th YOP"."</td>\n<td> ".$row["pass12"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."12th board"."</td>\n<td> ".$row["board12"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Diploma percentage"."</td>\n<td> ".$row["percent_diplo"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Diploma year"."</td>\n<td> ".$row["year_diplo"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-1 marks"."</td>\n<td> ".$row["marks_sem1"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-1 percentage"."</td>\n<td> ".$row["percent_sem1"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-1 backs"."</td>\n<td> ".(($row["result_sem1"]=="0")?"None":$row["result_sem1"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-2 marks"."</td>\n<td> ".$row["marks_sem2"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-2 percentage"."</td>\n<td> ".$row["percent_sem2"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-2 backs"."</td>\n<td> ".(($row["result_sem2"]=="0")?"None":$row["result_sem2"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-3 marks"."</td>\n<td> ".$row["marks_sem3"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-3 percentage"."</td>\n<td> ".$row["percent_sem3"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-3 backs"."</td>\n<td> ".(($row["result_sem3"]=="0")?"None":$row["result_sem3"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-4 marks"."</td>\n<td> ".$row["marks_sem4"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-4 percentage"."</td>\n<td> ".$row["percent_sem4"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-4 backs"."</td>\n<td> ".(($row["result_sem4"]=="0")?"None":$row["result_sem4"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-5 marks"."</td>\n<td> ".$row["marks_sem5"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-5 percentage"."</td>\n<td> ".$row["percent_sem5"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-5 backs"."</td>\n<td> ".(($row["result_sem5"]=="0")?"None":$row["result_sem5"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-6 marks"."</td>\n<td> ".$row["marks_sem6"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-6 percentage"."</td>\n<td> ".$row["percent_sem6"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."SEM-6 backs"."</td>\n<td> ".(($row["result_sem6"]=="0")?"None":$row["result_sem6"]) ."</td></tr>\n";
          $output.="<tr>\n<td>"."Total marks "."</td>\n<td> ".$row["marks_total"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Max. marks"."</td>\n<td> ".$row["marks_max"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."B.Tech. percentage"."</td>\n<td> ".$row["aggregate"] ."</td></tr>\n";
          $output.="<tr>\n<td>"."Total Backs"."</td>\n<td> ".$row["backs"] ."</td></tr>\n";
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
    function placement(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      echo "Registration no:$reg_no<br/>\nEmail:$email<br/>\nPlacement: ";
      try{
        $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from placement where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          while($row = $q->fetch()){
            $output.=$row[1].", ";
          }
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
