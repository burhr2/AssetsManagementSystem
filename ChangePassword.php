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
<style type="text/css">
.form-group{
  margin-top: 30px;
  }</style>
 
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
    </br>
     <div class="col-sm-3">
                   
<h5>
      
        <div class="list-group">
          
               
         <a href="changepassword.php" class="list-group-item">Change password</a>
         <a href="AddNewUser.php" class="list-group-item">Add user</a>
        
         
         </div></h5>
      </div>
      
      <div class="col-sm-9" style="height:500px">
<h4 style="margin-left:220px">Change password</h4>
 <form class="form-horizontal" role="form" method="post" action="changePass.php">
    <div class="form-group">
  <label class="control-label col-sm-3" for="OldPassword">Old password:</label>  
  <div class="col-md-3">
  <input id="OldPassword" name="OldPassword" placeholder="enter old password" class="form-control input-md" required="" type="password">
    </div></div>

     <div class="form-group">
  <label class="control-label col-sm-3" for="NewPassword">New password:</label>  
  <div class="col-md-3">
  <input id="NewPassword" name="NewPassword" placeholder="enter new password" class="form-control input-md" required="" type="password">
    </div></div>

    <div class="form-group">
  <label class="control-label col-sm-3" for="CNewPassword">Confirm new password:</label>  
  <div class="col-md-3">
  <input id="CNewPassword" name="CNewPassword" placeholder="confirm new password" class="form-control input-md" required="" type="password">
    </div>
</div>
<div class="form-group">        
      <div class="col-sm-offset-4 col-md-5">
        <input type="submit" class="btn btn-success" value="Update"/>
      </div>
    </div>
      </form>
</div>
   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2016 </p></center>
    
  
   
</div></div>
    

</body>
</html>