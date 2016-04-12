    <?php
include("connection.php");
include("sessionlock.php");
// username and password sent from form 

$oldpassword=isset($_POST["OldPassword"]) ? $_POST["OldPassword"] :"";

$newpassword=isset($_POST["NewPassword"]) ? $_POST["NewPassword"] :"";
$cnewpassword=isset($_POST["CNewPassword"]) ? $_POST["CNewPassword"] :"";



$sql="SELECT * FROM users WHERE UserId='$user_check'";

$result=mysql_query($sql);

$row=mysql_fetch_array($result);

//if count is 1 the user and password match
$count=mysql_num_rows($result);
$password=$row['Password'];
$fllname=$row['FullName'];
$administrator=$row['IsAdmin'];
//echo $oldpassword;
echo $fllname;
echo $administrator;
/*echo "".$administrator."<br>";
echo "".$count."<br>";
echo "".$fullname."<br>";


if($count=="1"){
	$_SESSION['userid']=$userid;
	
 if ($administrator=="Yes") 
header("location: index.php");
else 
header("location: users.php");

}else{
header("location: loginfailed.php");

}*/

?>
