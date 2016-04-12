<?php

include ('connection.php');
include("sessionlock.php");

$asset=isset($_POST["AssetName"]) ? $_POST["AssetName"] :"";

$serialNo=isset($_POST["SerialNo"]) ? $_POST["SerialNo"] :"";

$model=isset($_POST["Model"]) ? $_POST["Model"] :"";

$description=isset($_POST["Description"]) ? $_POST["Description"] :"";

$classification=isset($_POST["Classification"]) ? $_POST["Classification"] :"";

$category=isset($_POST["Category"]) ? $_POST["Category"] :"";

$price=isset($_POST["Price"]) ? $_POST["Price"] :"";

$location=isset($_POST["Location"]) ? $_POST["Location"] :"";

$sublocation=isset($_POST["Sub-Location"]) ? $_POST["Sub-Location"] :"";

$dateadded=isset($_POST["DateAdded"]) ? $_POST["DateAdded"] :"";

$dateexpire=isset($_POST["DateExpire"]) ? $_POST["DateExpire"] :"";


$note=isset($_POST["Note"]) ? $_POST["Note"] :"";

$user=$row["UserId"];


$sql ="INSERT INTO assets (AssetName,SerialNo,Model,Description,Classification,Category,Price,Location,SubLocation,DateAdded,ExpireDate,Note,UserId) VALUES ('".$asset."','".$serialNo."','".$model."','".$description."','".$classification."','".$category."','".$price."','".$location."','".$sublocation."','".$dateadded."','".$dateexpire."','".$note."','".$user."');";

$Add=mysql_query($sql);

if ($Add==true) {
header("location: index.php");

} else {
echo "Error in adding data";
}


?>