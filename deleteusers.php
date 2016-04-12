<?php
    include('sessionlock.php');
    include_once('connection.php');
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
$sql=mysql_query("DELETE FROM users WHERE Id='$id'");
$row=mysql_fetch_array($sql);
        }
        header("Location:index.php");
    }
?>

