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
  $query="select r.id,r.reg_no,p.name,r.status from requests r,personal p where r.reg_no=p.reg_no and p.name like '%".$_POST["name"]."%' ";
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
  $query.="order by r.id desc;";
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
      $output.=$rows["status"]."</span></td><td><button type=\"button\"  data-toggle=\"modal\" data-target=\"#viewRequest\" onclick=\"viewDetails('".$rows["id"]."')\">View</button></tr>\n";
    }
  }
  else{
    $output="No requests!";
  }
  echo $output;
}

function viewDetails(){
  // function to view details in view popup

  global $usr,$pass;
  $output=array();
  $con=new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);

  //basic request details
  $query="select r.id \"id\",r.reg_no \"reg_no\",p.name \"name\",r.status \"status\" from requests r,personal p where r.reg_no=p.reg_no and r.id=".$_POST['id'].";";
  $q=$con->prepare($query);
  $q->execute();
  if($q->rowCount()>0){
    $row=$q->fetch();
    $output["id"]=$row["id"];
    $output["reg_no"]=$row["reg_no"];
    $output["name"]=$row["name"];
    $status="<span style=\"font-size:0.85em;\" class=\"label ";
    if($row["status"]=="ACCEPTED")
      $status.="label-success\">";
    elseif($row["status"]=="PENDING")
      $status.="label-warning\">";
    elseif($row["status"]=="REJECTED")
      $status.="label-danger\">";
    $status.=$row["status"]."</span>";
    $output["status"]=$status;
  }

  //displaying changed data
  $query="select p.email_alter \"pemail_alter\",r.email_alter \"email_alter\",p.mobile \"pmobile\",r.mobile \"mobile\",p.mobile_father \"pmobile_father\",r.mobile_father \"mobile_father\",p.fb \"pfb\",r.fb \"fb\",r.status from requests r,personal p where r.reg_no=p.reg_no and r.id=".$_POST['id'].";";
  $q=$con->prepare($query);
  $q->execute();
  if($q->rowCount()>0){
    $row=$q->fetch();
    $output["data"]="";
    $status=$row["status"];
    //if request is pending
    if($row["status"]=="PENDING"){
      //checking alternate email change
      if($row["pemail_alter"]!=$row["email_alter"])
        $output["data"].="<tr><td>New alternate email:</td><td>".(($row["email_alter"]=="")?"NONE":$row["email_alter"])."</td></tr>\n";
        //checking alternate email change
        if($row["pmobile"]!=$row["mobile"])
        $output["data"].="<tr><td>New mobile:</td><td>".(($row["mobile"]=="")?"NONE":$row["mobile"])."</td></tr>\n";
        //checking alternate email change
        if($row["pmobile_father"]!=$row["mobile_father"])
        $output["data"].="<tr><td>New father's mobile:</td><td>".(($row["mobile_father"]=="")?"NONE":$row["mobile_father"])."</td></tr>\n";
        //checking alternate email change
        if($row["pfb"]!=$row["fb"])
        $output["data"].="<tr><td>Facebook:</td><td><a href=\"https://www.facebook.com/".$row["fb"] ."\" target=\"_blank\">".(($row["fb"]=="")?"NONE":$row["fb"])."</a>"."</td></tr>\n";
    }
    else{
      //displaying all values
        $output["data"].="<tr><td>Alternate email:</td><td>".(($row["email_alter"]=="")?"NONE":$row["email_alter"])."</td></tr>\n";
        $output["data"].="<tr><td>Mobile:</td><td>".(($row["mobile"]=="")?"NONE":$row["mobile"])."</td></tr>\n";
        $output["data"].="<tr><td>Father's mobile:</td><td>".(($row["mobile_father"]=="")?"NONE":$row["mobile_father"])."</td></tr>\n";
        $output["data"].="<tr><td>Facebook:</td><td><a href=\"https://www.facebook.com/".$row["fb"] ."\" target=\"_blank\">".(($row["fb"]=="")?"NONE":$row["fb"])."</a>"."</td></tr>\n";
    }
  }
    $query="select c,cpp,java,java_adv,android,php,html,iot,python,ruby,php_frame,mysql,oracle,net,javascript,objective_c,red_hat,ubuntu,ios,bootstrap,matlab,ml,data_mining,r,mongodb,angular_js,node_js,ms_office,photoshop,coral_draw,other from requests where id=".$_POST['id'].";";
    $q=$con->prepare($query);
    $q->execute();
    if($q->rowCount()>0){
      $row=$q->fetch();
      $output["data"].="<tr><td>Knowledge about::</td><td>";
      //assuming no entry for languages;
      $flag=1;
      for($i=0;$i<count($row)/2;$i++){
        if(isset($row[$i])){
          $output["data"].=$row[$i].", ";
          $flag=0;    //there is an entry for lanuages;
        }
      }
      if(!$flag)
        $output["data"]=rtrim($output["data"],", ");
      else
        $output["data"].="NONE";
      $output["data"].="</td></tr>";
    }

    //adding accept and reject button in view popup
    $output["viewButtons"]="";
    if($status=="PENDING"){
      $output["viewButtons"]="<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"acceptRequest('".$_POST['id']."')\">Accept</button>";
      $output["viewButtons"].="<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" onclick=\"rejectRequest('".$_POST['id']."')\">Reject</button>";
    }
  echo json_encode($output);
}


function acceptRequest(){
  global $usr,$pass;
  $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
  $query = "select status from requests where id=".$_POST["id"]." and status='PENDING';";
  $q=$con->prepare($query);
  $q->execute();
  //security check - if request id is pending then execute
  if($q->rowCount()>0){

    //updating personal table from requests table.
    $query = "update requests as r inner join personal as p on p.reg_no=r.reg_no set p.mobile=r.mobile,p.email_alter=r.email_alter,p.mobile_father=r.mobile_father,p.fb=r.fb where r.id=".$_POST["id"].";";
    $con->exec($query);

    //updating personal table from requests table.
    $query = "update requests as r inner join language as l on l.reg_no=r.reg_no set r.status='ACCEPTED',l.c=r.c,l.cpp=r.cpp,l.java=r.java,l.java_adv=r.java_adv,l.android=r.android,";
    $query.="l.php=r.php,l.html=r.html,l.iot=r.iot,l.python=r.python,l.ruby=r.ruby,l.php_frame=r.php_frame,l.mysql=r.mysql,l.oracle=r.oracle,l.net=r.net,l.javascript=r.javascript,";
    $query.="l.objective_c=r.objective_c,l.red_hat=r.red_hat,l.ubuntu=r.ubuntu,l.ios=r.ios,l.bootstrap=r.bootstrap,l.matlab=r.matlab,l.ml=r.ml,l.data_mining=r.data_mining,l.r=r.r,";
    $query.="l.mongodb=r.mongodb,l.angular_js=r.angular_js,l.node_js=r.node_js,l.ms_office=r.ms_office,l.photoshop=r.photoshop,l.coral_draw=r.coral_draw,l.other=r.other where r.id=".$_POST["id"].";";
    $con->exec($query);

    echo "Success!";
  }
  else {
    echo "Failure!";
  }
}
function rejectRequest(){
  global $usr,$pass;
  $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
  $query = "select status from requests where id=".$_POST["id"]." and status='PENDING';";
  $q=$con->prepare($query);
  $q->execute();
  //security check - if request id is pending then execute
  if($q->rowCount()>0){
    $query = "update requests set status='REJECTED' where id=".$_POST["id"].";";
    $con->exec($query);
    echo "Success!";
  }
  else {
    echo "Failure!";
  }
}
if(isset($_POST["action"])){
  switch($_POST["action"]){
    case "display": display();
      break;
    case "viewDetails":viewDetails();
      break;
    case "acceptRequest": acceptRequest();
      break;
    case "rejectRequest":rejectRequest();
      break;
  }
}
?>
