<?php

include ('connection.php');
include('sessionlock.php');
include('bootstrap.html');


$taskname = isset($_POST["TaskName"]) ? $_POST["TaskName"] :" ";




$taskdescription=isset($_POST["TaskDescription"]) ? $_POST["TaskDescription"] :"";

$state=isset($_POST["State"]) ? $_POST["State"] :"";



$location=isset($_POST["Location"]) ? $_POST["Location"] :"";

$sublocation=isset($_POST["SubLocation"]) ? $_POST["SubLocation"] :"";


$assigneddate=isset($_POST["DateAdded"]) ? $_POST["DateAdded"] :"";

$assignername=isset($_POST["assignername"]) ? $_POST["assignername"] :"";
$fullname=isset($_POST["FullName"]) ? $_POST["FullName"] :"";




//INSERT DATA
$sql1="INSERT INTO task (UserId,TaskName,TaskDescription,State,Location,SubLocation,AssignedDate,AssignerName) VALUES('".$fullname."','".$taskname."','".$taskdescription."','".$state."','".$location."','".$sublocation."','".$assigneddate."','".$fullname."');";
//CHECK FOR SUCCESS
$add=mysql_query($sql1);
 if ($add==true) {
 	  header("location: HomeTask.php");
 echo "<script>
        alert('success')
        </script>";


 } else {
echo "error in adding data";
 
}

?>
