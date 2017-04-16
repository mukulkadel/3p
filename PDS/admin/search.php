<?php
session_start();
$name="";
$output="";
$usr="root";
$pass="";
error_reporting(0);


if(isset($_POST['reg_no'])){
  $_SESSION['reg_no']=$_POST['reg_no'];
  exit(0);
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

}

if($_POST['b']!="")
{
  $query.=" and(language.cpp='".$_POST['b']."')";

}


if($_POST['c']!="")
{
  $query.=" and(language.java='".$_POST['c']."')";

}
if($_POST['d']!="")
{
  $query.=" and(language.java_adv='".$_POST['d']."')";

}
if($_POST['e']!="")
{
  $query.=" and(language.android='".$_POST['e']."')";

}
if($_POST['f']!="")
{
  $query.=" and(language.php='".$_POST['f']."')";

}
if($_POST['g']!="")
{
  $query.=" and(language.html='".$_POST['g']."')";

}
if($_POST['h']!="")
{
  $query.=" and(language.iot='".$_POST['h']."')";

}
if($_POST['i']!="")
{
  $query.=" and(language.python='".$_POST['i']."')";

}
if($_POST['j']!="")
{
  $query.=" and(language.ruby='".$_POST['j']."')";

}
if($_POST['k']!="")
{
  $query.=" and(language.php_frame='".$_POST['k']."')";

}
if($_POST['l']!="")
{
  $query.=" and(language.mysql='".$_POST['l']."')";

}
if($_POST['m']!="")
{
  $query.=" and(language.oracle='".$_POST['m']."')";

}
if($_POST['n']!="")
{
  $query.=" and(language.net='".$_POST['n']."')";

}
if($_POST['o']!="")
{
  $query.=" and(language.javascript='".$_POST['o']."')";

}
if($_POST['p']!="")
{
  $query.=" and(language.objective_c='".$_POST['p']."')";

}
if($_POST['q']!="")
{
  $query.=" and(language.red_hat='".$_POST['q']."')";

}
if($_POST['r']!="")
{
  $query.=" and(language.ubuntu='".$_POST['r']."')";

}
if($_POST['s']!="")
{
  $query.=" and(language.ios='".$_POST['s']."')";

}
if($_POST['t']!="")
{
  $query.=" and(language.bootstrap='".$_POST['t']."')";
  echo "you win";
}
if($_POST['u']!="")
{
  $query.=" and(language.matlab='".$_POST['u']."')";

}
if($_POST['v']!="")
{
  $query.=" and(language.ml='".$_POST['v']."')";

}
if($_POST['w']!="")
{
  $query.=" and(language.data_mining='".$_POST['w']."')";

}
if($_POST['x']!="")
{
  $query.=" and(language.r='".$_POST['x']."')";

}
if($_POST['y']!="")
{
  $query.=" and(language.mongodb='".$_POST['y']."')";

}
if($_POST['z']!="")
{
  $query.=" and(language.angular_js='".$_POST['z']."')";

}
if($_POST['aa']!="")
{
  $query.=" and(language.node_js='".$_POST['aa']."')";

}
if($_POST['ab']!="")
{
  $query.=" and(language.ms_office='".$_POST['ab']."')";

}
if($_POST['ac']!="")
{
  $query.=" and(language.photoshop='".$_POST['ac']."')";

}
if($_POST['ad']!="")
{
  $query.=" and(language.coral_draw='".$_POST['ad']."')";

}
if($_POST['ae']!="")
{
  $query.=" and(language.others='".$_POST['ae']."')";

}


	if(($_POST['min1'] && $_POST['max1'])!="" )
	{

	 $query.="and pro.aggregate BETWEEN '".$_POST['min1']."'AND '".$_POST['max1']."'";
	}

		if(($_POST['min2'] && $_POST['max2'])!="" )
	{

	 $query.="and pro.percent12 BETWEEN '".$_POST['min2']."'AND '".$_POST['max2']."'";
	}

		if(($_POST['min3'] && $_POST['max3'])!="" )
	{

	 $query.="and pro.percent10 BETWEEN '".$_POST['min3']."'AND '".$_POST['max3']."'";
	}

 //query to filter according to aggregate B.TECH percentage
     if($_POST['min_range']!="")
	 $query.="and pro.aggregate >= '".$_POST['min_range']."'";




	//query to filter according to aggregate 12th percentage
	 if($_POST['twelve']!="")
	 $query.="and pro.percent12 >= '".$_POST['twelve']."'";

	 //query to filter according to aggregate 12th percentage
	  if($_POST['tenth']!="")
	 $query.="and pro.percent10 >= '".$_POST['tenth']."'";


	//query to search from backlogs
	  if($_POST['subm']!="")
	 $query.="and pro.backs >= '".$_POST['subm']."'";
	//echo $query;
     $query.=";";
	 $_SESSION['varname'] = $query;
	  $c=$con->prepare($query);
     $c->execute();
 if($c->rowCount()> 0)
     {
         $output="<table class=\"table\">";
           while($rows=$c->fetch())
         {

           $reg_no=$rows['reg_no'];
           $output.="<tr><td>".$rows['reg_no']."</td><td>".$rows['name']."</td><td><button onclick=\"showDetails('$reg_no')\">Show Details</button></td></tr>\n";
          }
		   $output.="<center><tr><td>".'<input type="button" value="Excel Format" class="btn btn-success"  onclick="location.href = \'http://localhost/3p/PDS/admin/excel.php\' ;"/>'."</td><td></center>";
         $output.="</table>";
     }
     else{

           $output="No result";
         }


echo $output;


?>
