<?php 

$host = "localhost";
$user = "root";
$pswd = "";


$dbconnect= mysql_connect($host, $user, $pswd);
$dbcon=mysql_select_db("new_tams") or die("Error with DB");

/*

if ($dbconnect && $dbcon) {
echo "successfully connected";
} else {
echo "error duriing connection";
}

*/

?>