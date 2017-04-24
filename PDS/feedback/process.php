<?php
  session_start();

//Initialization
  $usr="root";
  $pass="";

  if(isset($_POST["submit"])&&($_POST["submit"]=="Submit")){
      $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query="insert into feedback(success,efforts,video,suggestion,summery) values(".(isset($_POST["success"])?$_POST["success"]:-1).",".(isset($_POST["efforts"])?$_POST["efforts"]:-1).",".(isset($_POST["video"])?$_POST["video"]:-1).",'".(isset($_POST["suggestion"])?$_POST["suggestiom"]:"")."','".(isset($_POST["summery"])?$_POST["summery"]:"")."');";
      $con->exec($query);
  }
  header("location:./index.php");
 ?>
