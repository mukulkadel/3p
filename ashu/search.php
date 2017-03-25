<?php
session_start();
$name="";
$output="";
$usr="root";
$pass="";
if(isset($_POST['reg_no'])){
  $_SESSION['reg_no']=$_POST['reg_no'];
}
 if(isset($_POST['searchVal']))
    {
      $key = $_POST['searchVal'];
      $con = new PDO('mysql:host=localhost;dbname=pdb',$usr,$pass);
     $query="select personal.reg_no,name from personal,pro where ( personal.reg_no=pro.reg_no ) and ( name like '%$key%' or personal.reg_no like '$key%' )";
    if($_POST['hosteller']!="")
        $query.=" and ( hosteller='".$_POST['hosteller']."' or hosteller='' ) ";
     $query.=";";
     echo $query;
     $c= $con->prepare($query);
     $c->execute();

 if($c->rowCount()> 0)
     {
         $output="<table border=\"1\">";
           while($rows=$c->fetch())
         {
           $reg_no=$rows['reg_no'];
               // $output=$rows['Name'];
              $output.="<tr><td>".$rows['reg_no']."</td><td>".$rows['name']."</td><td><button onclick=\"showDetails('$reg_no')\">Show Details</button></td></tr>\n";
           // $hello=$rows['Id'];
             //$var_value = $_SESSION['varname'];
//              echo "$hello";

         }
         $output.="</table>";
     }
     else{

           $output="No result";
     }

    }
echo $output;

?>
