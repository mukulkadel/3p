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
     $query="select personal.reg_no,name from personal,pro where ( personal.reg_no=pro.reg_no ) and ( name like '%$key%' or personal.reg_no like '$key%' )";
	 //query for filter by checkboxes
	
	//query for filter hostellers 
    if($_POST['hosteller']!="L")
	{
	$query.=" and (personal.hosteller='".$_POST['hosteller']."'or personal.hosteller='')";
	}else{}
	//filter by language
	 if($_POST['check']!="")
	{
			$a=$_POST['check'];
			$string = implode('/', $a);
			echo $string;
		
			$query.=" and txp= '".$string."'";
   //         $ashquery="select personal.reg_no,name from personal,pro txp='".$string."'".";";	
		//    $a=$con->prepare($ashquery);
          //  $a->execute();
		//	$results = $a->fetchAll(PDO::FETCH_ASSOC);
		//	$strings= implode(',',$results);
			//print_r($results);
           // $ProductID = $row['ProductID'];
            }	
 		//	echo $query;
		//	$pattern="/^"+$query+"$/i";//we will write query
		//	$matched= preg_match($pattern,$string);
		//		if($matched)
		//		{
		//			 echo $string;
		//			 echo "Here we are";
		//			 again there is a query
		//		} else{echo "You are a loser you cannt do anything";}
	 
	}else{echo "You lose";}
	
	
 // $query.="aggregate BETWEEN '".$_POST['']."'AND '".$_POST['']."'";
 // echo $query;
 
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

    
echo $output;

?>
