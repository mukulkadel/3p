<?php

session_start();

//admin check & login check
if(!isset($_SESSION["admin"])||!isset($_SESSION["email"]))
  header("location:../login.php");

$usr="root";
$pass="";
$rows=array();
function displayAdmins(){
  global $usr,$pass,$rows;
  $output="";
  $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query="select * from admin;";
  $q=$con->prepare($query);
  $q->execute();
  if($q->rowCount()>0){
    $rows=$q->fetchAll();
    for($i=0;$i<$q->rowCount();$i++){
      $output.="<tr id=\"a$i\"><td id=\"email\">".$rows[$i]["email"]."</td><td id=\"authority\">".$rows[$i]["authority"]."</td><td>";
      //partial admin will not get view button
      if($_SESSION["admin"]=="FULL")
        $output.="<button onclick=\"editAdmin('a$i','".$rows[$i]["email"]."')\">Edit</button>";
      $output.="</td></tr>\n";
    }
  }
  echo $output;
}

function editAdmin(){
  $output="<td><input type=\"hidden\" value=\"".$_POST["email"]."\"/><input type=\"email\" id=\"email\" value=\"".$_POST["email"]."\"/></td>\n";
  $output.="<td><select id=\"authority\">\n";
  $output.="<option value=\"FULL\" ".(($_POST["authority"]=="FULL")?"selected":"").">FULL</option>\n";
  $output.="<option value=\"PARTIAL\" ".(($_POST["authority"]=="PARTIAL")?"selected":"").">PARTIAL</option>\n";
  $output.="</select></td>\n";
  $output.="<td><button onclick=\"save('".$_POST["code"]."')\">Save</button><button onclick=\"deleteAdmin('".$_POST["code"]."')\">Delete</button></td>\n";
  echo $output;
}

function saveAdmin(){
    global $usr,$pass;
    $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="update admin set email='".$_POST["email"]."',authority='".$_POST["authority"]."' where email='".$_POST["key"]."';";
    $con->exec($query);
    echo "Success!";
}

function deleteAdmin(){
    global $usr,$pass;
    $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="delete from admin where email='".$_POST["key"]."';";
    $con->exec($query);
    echo "Success!";
}

function addAdmin(){
    global $usr,$pass;
    $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="insert into admin value('".$_POST["email"]."','".$_POST["authority"]."');";
    $con->exec($query);
    echo "Success!";
}

if(isset($_POST["action"])){
  
  //only admin with full authority can call all functions
  switch($_POST["action"]){
    case "displayAdmins": displayAdmins();
      break;
    case "editAdmin": if($_SESSION["admin"]=="FULL") editAdmin();
      break;
    case "save": if($_SESSION["admin"]=="FULL") saveAdmin();
      break;
    case "deleteAdmin": if($_SESSION["admin"]=="FULL") deleteAdmin();
      break;
    case "addAdmin": if($_SESSION["admin"]=="FULL") addAdmin();
      break;
  }
}
?>
