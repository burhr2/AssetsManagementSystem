<?php
include("connection.php");
include("sessionlock.php");


$sql=mysql_query("select * from users where FullName='$fullname'");

$row=mysql_fetch_array($sql);
$fullname=$row['FullName'];
$user=$row["UserId"];
?>
<html lang="en">
<head>
<title>|home</title> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/PassComfirm.js"></script>

 
</head>
<body>
<div class="container">

  <!-- navbar-fixed-top for fixed top -->
  <nav class="navbar navbar-inverse ">
   <div class="container-fluid" style = "background-color: #005200">
    
    <ul class="nav navbar-nav" style ="color: white">
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="AssetHome.php">Assets</a></li>
      <li><a href="HomeTask.php">Task</a></li>
      <li><a href="ViewUser.php">User</a></li>
      <li><a href="ViewReport.php">Report</a></li>
      <li><a href="#">settings</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php echo " ".$fullname.""?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    
     <div class="col-sm-3">
                   
<br><br>
      
         <div class="list-group">
          
               
         <a href="ChangePassword.php" class="list-group-item">Change password</a>
         <a href="AddNewUser.php" class="list-group-item">Add user</a>
        
         
         </div></h5>
      </div>
      
      <div class="col-sm-9">

  <table class="table">
     <thead><center><h4>User profile</h4></center></thead>
    <tbody>
      <tr class="success">
        <td>Full name:</td>
        <td><?php echo $fullname ?></td>
      </tr>
      <tr class="danger">
        <td>Date of birth:</td>
        <td><?php echo $row['DateOfBirth']; ?></td>
      </tr>
      <tr class="info">
        <td>Gender:</td>
        <td><?php echo $row['Gender']; ?></td>
      </tr>
      <tr class="info">
        <td>Marital status:</td>
        <td><?php echo $row['MaritalStatus']; ?></td>
      </tr>
      <tr class="info">
        <td>Age:</td>
        <td><?php echo $row['Age']; ?></td>
      </tr>
      <tr class="info">
        <td>User id:</td>
        <td><?php echo $row['UserId']; ?></td>
      </tr>
      <tr class="info">
        <td>Department:</td>
        <td><?php echo $row['Department']; ?></td>
      </tr>
      <tr class="info">
        <td>Role:</td>
        <td><?php echo $row['Role']; ?></td>
      </tr>

      <tr class="info">
        <td>Status:</td>
        <td><?php  if($row['Gender']=="Yes"){ 
          echo "System admin";
        }else{
          echo "Normal user";
      }  ?></td>
      </tr>
      <tr class="info">
        <td>Date added:</td>
        <td><?php echo $row['DateAdded']; ?></td>
      </tr>
      <tr class="info">
        <td>Phone number:</td>
        <td><?php echo $row['PhoneNo']; ?></td>
      </tr>
      <tr class="info">
        <td>Email:</td>
        <td><?php echo $row['Email']; ?></td>
      </tr>
      <tr class="info">
        <td>Address:</td>
        <td><?php echo $row['Address']; ?></td>
      </tr>
    </tbody>
  </table>


</div>
      
</div>
   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2016 </p></center>
    
  
   
</div></div>
    

</body>
</html>