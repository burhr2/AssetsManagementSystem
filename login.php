    <?php
include("connection.php");
session_start();
// username and password sent from form 

$userid=isset($_POST["UserId"]) ? $_POST["UserId"] :"";

$password=isset($_POST["Password"]) ? $_POST["Password"] :"";

$sql="SELECT FullName,IsAdmin FROM users WHERE UserId='$userid' and password='$password'";

$result=mysql_query($sql);

$row=mysql_fetch_array($result);

//if count is 1 the user and password match
$count=mysql_num_rows($result);
$fullname=$row['FullName'];
$administrator=$row['IsAdmin'];
/*echo "".$administrator."<br>";
echo "".$count."<br>";
echo "".$fullname."<br>";
	$_SESSION['userid']=$fullname;
echo $fullname;
*/
if($count=="1"){
	$_SESSION['userid']=$userid;
	
 if ($administrator=="Yes") 
header("location: index.php");
else 
header("location: users.php");

}else{
header("location: loginfailed.php");

}

?>