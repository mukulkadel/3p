<?php

session_start();

//admin check & login check
if(isset($_SESSION["admin"])||!isset($_SESSION["email"]))
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
      if($key!="otherValue"&&$key!="submit"&&$key!="X-Mapping-hflcknee"&&$key!="PHPSESSID")
      $query.=",".$key;
    }

    //adding values to query
    $query.=") values('$reg_no'";
    $f=0;
    if(isset($_REQUEST["other"])&&$_REQUEST["other"]=="other")
      $f=1;
    foreach ($_REQUEST as $key => $value) {
      if(($key!="other"&&$key!="submit"&&$key!="otherValue"&&$key!="X-Mapping-hflcknee"&&$key!="PHPSESSID")||($f==1&&$key=="otherValue"))
      $query.=",'".$value."'";
    }
    $query.=");";
    $con->exec($query);
  }
  catch(PDOException $e){
    echo "Error in processing request<br/>";
  }
}

/*foreach ($_REQUEST as $key => $value) {
  echo "$key $value<br/>";
}
echo $query;*/

//Redirecting after sending request
header("Location:./requests.php");
 ?>
