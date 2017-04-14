<?php
include_once("../check.php");

//admin check
if(isset($_SESSION["admin"]))
  header("location:../login.php");

$reg_no = $_SESSION["reg_no"];
$usr="root";
$pass="";

if(isset($_REQUEST["submit"])&&$_REQUEST["submit"]=="Request update"){
  try{//Starting database connection
    $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);

    //Deleting any existing pending request
    $query = "delete from requests where reg_no='$reg_no' and status='PENDING';";
    $con->exec($query);

    //Adding new request
    $query="insert into requests(reg_no";
    //adding column names in query
    foreach ($_REQUEST as $key => $value) {
      if($key!="otherValue"&&$key!="submit")
      $query.=",".$key;
    }

    //adding values to query
    $query.=") values('$reg_no'";
    foreach ($_REQUEST as $key => $value) {
      if($key!="other"&&$key!="submit")
      $query.=",'".$value."'";
    }
    $query.=");";
    $con->exec($query);
  }
  catch(PDOException $e){
    echo "Error in processing request<br/>";
  }
}
//Redirecting after sending request
header("Location:./requests.php");
 ?>
