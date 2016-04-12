<?php
include('connection.php');
session_start();
//stores the value assigned after it was created
$user=$_SESSION['userid'];


$sql="SELECT FullName from users where UserId='$user'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$fullname=$row['FullName'];

if(!isset($_SESSION['userid']))
header("location: login.html");


?>