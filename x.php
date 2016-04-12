<?php

include ('connection.php');
include('sessionlock.php');

//Full name

$taskname = isset($_POST["TaskName"]) ? $_POST["TaskName"] :" ";

$recommendation=isset($_POST["TaskDescription"]) ? $_POST["TaskDescription"] :"";

$userid="session variable";


$dateadded=isset($_POST["DateAdded"]) ? $_POST["DateAdded"] :"";

$reportdescription=isset($_POST["ReportDescription"]) ? $_POST["ReportDescription"] :"";



//INSERT DATA
$sql1="INSERT INTO report (UserId,TaskName,DateAdded,ReportDescription,Recommendation) VALUES('".$userid."','".$taskname."','".$dateadded."','".$reportdescription."','".$recommendation."');";
//CHECK FOR SUCCESS
$add=mysql_query($sql1);
 if ($add==true) {
 	echo "data successfully added";
 } else {
echo "error in adding data";
 
}

?>
