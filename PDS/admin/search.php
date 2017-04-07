<?php
session_start();
$name="";
$output="";
$usr="root";
$pass="";
error_reporting(0);


if(isset($_POST['reg_no'])){
  $_SESSION['reg_no']=$_POST['reg_no'];
}
 if(isset($_POST['searchVal']))
    {
      $key = $_POST['searchVal'];
      $con = new PDO('mysql:host=localhost;port=3307;dbname=pdb',$usr,$pass);
	  
	  //query to filter data
   $query="select personal.reg_no,name from personal,pro,language where ( personal.reg_no=pro.reg_no )  and (pro.reg_no=language.reg_no) and ( name like '%$key%' or personal.reg_no like '$key%' )";
	 //query for filter by checkboxes
	
	//query for filter hostellers 
    if($_POST['hosteller']!="L")
	{
	$query.=" and (personal.hosteller='".$_POST['hosteller']."'or personal.hosteller='')";
	
	}else{}
}	

//query to filter by languages
if($_POST['a']!=NULL)
{
  $query.=" and(language.c='".$_POST['a']."')";
  echo "you win";
}else{echo "You loose";}

if($_POST['b']!="")
{
  $query.=" and(language.cpp='".$_POST['b']."')";
  echo "you win";
}


if($_POST['c']!="")
{
  $query.=" and(language.java='".$_POST['c']."')";
  echo "you win";
}
if($_POST['d']!="")
{
  $query.=" and(language.java_adv='".$_POST['d']."')";
  echo "you win";
}
if($_POST['e']!="")
{
  $query.=" and(language.android='".$_POST['e']."')";
  echo "you win";
}
if($_POST['f']!="")
{
  $query.=" and(language.php='".$_POST['f']."')";
  echo "you win";
}
if($_POST['g']!="")
{
  $query.=" and(language.html='".$_POST['g']."')";
  echo "you win";
}
if($_POST['h']!="")
{
  $query.=" and(language.iot='".$_POST['h']."')";
  echo "you win";
}
if($_POST['i']!="")
{
  $query.=" and(language.python='".$_POST['i']."')";
  echo "you win";
}
if($_POST['j']!="")
{
  $query.=" and(language.ruby='".$_POST['j']."')";
  echo "you win";
}
if($_POST['k']!="")
{
  $query.=" and(language.php_frame='".$_POST['k']."')";
  echo "you win";
}
if($_POST['l']!="")
{
  $query.=" and(language.mysql='".$_POST['l']."')";
  echo "you win";
}
if($_POST['m']!="")
{
  $query.=" and(language.oracle='".$_POST['m']."')";
  echo "you win";
}
if($_POST['n']!="")
{
  $query.=" and(language.net='".$_POST['n']."')";
  echo "you win";
}
if($_POST['o']!="")
{
  $query.=" and(language.javascript='".$_POST['o']."')";
  echo "you win";
}
if($_POST['p']!="")
{
  $query.=" and(language.objective_c='".$_POST['p']."')";
  echo "you win";
}
if($_POST['q']!="")
{
  $query.=" and(language.red_hat='".$_POST['q']."')";
  echo "you win";
}
if($_POST['r']!="")
{
  $query.=" and(language.ubuntu='".$_POST['r']."')";
  echo "you win";
}
if($_POST['s']!="")
{
  $query.=" and(language.ios='".$_POST['s']."')";
  echo "you win";
}
if($_POST['t']!="")
{
  $query.=" and(language.bootstrap='".$_POST['t']."')";
  echo "you win";
}
if($_POST['u']!="")
{
  $query.=" and(language.matlab='".$_POST['u']."')";
  echo "you win";
}
if($_POST['v']!="")
{
  $query.=" and(language.ml='".$_POST['v']."')";
  echo "you win";
}
if($_POST['w']!="")
{
  $query.=" and(language.data_mining='".$_POST['w']."')";
  echo "you win";
}
if($_POST['x']!="")
{
  $query.=" and(language.r='".$_POST['x']."')";
  echo "you win";
}
if($_POST['y']!="")
{
  $query.=" and(language.mongodb='".$_POST['y']."')";
  echo "you win";
}
if($_POST['z']!="")
{
  $query.=" and(language.angular_js='".$_POST['z']."')";
  echo "you win";
}
if($_POST['aa']!="")
{
  $query.=" and(language.node_js='".$_POST['aa']."')";
  echo "you win";
}
if($_POST['ab']!="")
{
  $query.=" and(language.ms_office='".$_POST['ab']."')";
  echo "you win";
}
if($_POST['ac']!="")
{
  $query.=" and(language.photoshop='".$_POST['ac']."')";
  echo "you win";
}
if($_POST['ad']!="")
{
  $query.=" and(language.coral_draw='".$_POST['ad']."')";
  echo "you win";
}
if($_POST['ae']!="")
{
  $query.=" and(language.others='".$_POST['ae']."')";
  echo "you win";
}




 //query to filter according to aggregate B.TECH percentage
     if($_POST['min_range']!="")
	 $query.="and pro.aggregate <= '".$_POST['min_range']."'";
	//echo $query;
	// $query.="aggregate BETWEEN '".$_POST['min_range']."'AND '".$_POST['max_range']."'";
	
	
	//query to filter according to aggregate 12th percentage
	 if($_POST['twelve']!="")
	 $query.="and pro.percent12 <= '".$_POST['twelve']."'";
	 
	 //query to filter according to aggregate 12th percentage
	  if($_POST['tenth']!="")
	 $query.="and pro.percent10 <= '".$_POST['tenth']."'";
	
	
	//query to search from backlogs
	  if($_POST['subm']!="")
	 $query.="and pro.backs >= '".$_POST['subm']."'";
	//echo $query;
     $query.=";";
	  $c=$con->prepare($query);
     $c->execute();
 if($c->rowCount()> 0)
     {
         $output="<table border=\"1\">";
           while($rows=$c->fetch())
         {
           $reg_no=$rows['reg_no'];
           $output.="<tr><td>".$rows['reg_no']."</td><td>".$rows['name']."</td><td><button onclick=\"showDetails('$reg_no')\">Show Details</button></td></tr>\n";
          }
         $output.="</table>";
     }
     else{

           $output="No result";
         }

  
echo $output;

?>
