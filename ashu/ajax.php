<?php
  session_start();

//Initialization
//  $_SESSION["reg_no"]='PIET/CE/13/001';
 $_SESSION["email"]='umapiet517@poornima.org';
  $usr="root";
  $pass="";

  //Storing session variables
  $reg_no = $_SESSION["reg_no"];
  $email = $_SESSION["email"];

    function personal(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      try{
        $con = new PDO("mysql:host=localhost;port=3307;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from personal where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          $row = $q->fetch();
          $i=0;
          foreach($row as $col=>$data){
            if(!($i++%2))
            $output.="$col : $data <br/>\n";
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
    function professional(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      try{
        $con = new PDO("mysql:host=localhost;port=3307;dbname=pdb",$usr,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="select * from pro where reg_no='$reg_no';";
        $q = $con->prepare($query);
        $q->execute();
        if($q->rowCount()>0){
          $row = $q->fetch();
          $i=0;
          foreach($row as $col=>$data){
            if(!($i++%2))
            $output.="$col : $data <br/>\n";
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
    function placement(){
      global $usr, $pass, $reg_no, $email;
      $output="";
      echo "Registration no:$reg_no<br/>\nEmail:$email<br/>\nPlacement: ";
      try{
        $con = new PDO("mysql:host=localhost;port=3307;dbname=pdb",$usr,$pass);
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
