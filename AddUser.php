<?php

include ('connection.php');

//Full name

$Fname = isset($_POST["FName"]) ? $_POST["FName"] :" ";




$Mname=isset($_POST["MName"]) ? $_POST["MName"] :"";

$Lname=isset($_POST["LName"]) ? $_POST["LName"] :"";

//fullname
$fullname="".$Lname.", ".$Fname." ".$Mname."";
//date of birth
$dob=isset($_POST["Dob"]) ? $_POST["Dob"] :"";

//gender
$gender=isset($_POST["Gender"]) ? $_POST["Gender"] :"";

//age
$age=isset($_POST["Age"]) ? $_POST["Age"] :"";


//status
$status=isset($_POST["MaritalStatus"]) ? $_POST["MaritalStatus"] :"";

//address
$address=isset($_POST["Address"]) ? $_POST["Address"] :"";

//email
$email=isset($_POST["Email"]) ? $_POST["Email"] :"";

//mobile 
$phone=isset($_POST["Pnumber"]) ? $_POST["Pnumber"] :"";

//Department
$department=isset($_POST["Department"]) ? $_POST["Department"] :"";

//Role
$role=isset($_POST["Role"]) ? $_POST["Role"] :"";

//Admin
$admin=isset($_POST["Admin"]) ? $_POST["Admin"] :"";

//Date user was added
$dateadded=isset($_POST["DateAdded"]) ? $_POST["DateAdded"] :"";

//user id
$userid=isset($_POST["UserId"]) ? $_POST["UserId"] :"";

//username
$username=isset($_POST["UserName"]) ? $_POST["UserName"] :"";

//password
$password=isset($_POST["Password"]) ? $_POST["Password"] :"";

//confirm password
$cpassword=isset($_POST["Cpassword"]) ? $_POST["Cpassword"] :"";





//INSERT DATA
$sql1="INSERT INTO users (FullName,DateOfBirth,Gender,MaritalStatus,Age,UserId,Department,Role,IsAdmin,DateAdded,Password,phoneNo,Email,Address) VALUES('".$fullname."','".$dob."','".$gender."','".$status."','".$age."','".$userid."','".$department."','".$role."','".$admin."','".$dateadded."','".$password."','".$phone."','".$email."','".$address."');";
//CHECK FOR SUCCESS
$add=mysql_query($sql1);
 if ($add==true) {
header("location: index.php");
 } else {
echo "<script>";
echo "alert(fail to add data)";
header("location: AddNewUser.php");
echo"</script>";

}
?>
