<?php

session_start();

//admin check & login check
if(!isset($_SESSION["admin"])||!isset($_SESSION["email"]))
  header("location:../login.php");

$usr="root";
$pass="";

function display(){
  global $usr,$pass;
  $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
  $query="select r.id \"id\",r.reg_no \"reg_no\",p.name \"name\",r.status \"status\" from requests r,personal p where r.reg_no=p.reg_no ";
  $output="";
  if($_POST["mode"]=="ACCEPTED"){
    $query.="and r.status='ACCEPTED' ";
  }
  elseif($_POST["mode"]=="PENDING"){
    $query.="and r.status='PENDING' ";
  }
  elseif($_POST["mode"]=="REJECTED"){
    $query.="and r.status='REJECTED' ";
  }
  $query.="order by r.ts desc;";
  $q=$con->prepare($query);
  $q->execute();
  if($q->rowCount()>0){
    while($rows=$q->fetch()){
      $output.="<tr><td>#".$rows["id"]."</td><td>".$rows["reg_no"]."</td><td>".$rows["name"]."</td><td><span style=\"font-size:0.85em;\" class=\"label ";
      if($rows["status"]=="ACCEPTED")
        $output.="label-success\">";
      elseif($rows["status"]=="PENDING")
        $output.="label-warning\">";
      elseif($rows["status"]=="REJECTED")
        $output.="label-danger\">";
      $output.=$rows["status"]."</td><td><button>View</button></tr>\n";
    }
  }
  else{
    $output="No requests!";
  }
  echo $output;
}

if(isset($_POST["action"])){
  switch($_POST["action"]){
    case "display": display();
      break;
  }
}
?>
