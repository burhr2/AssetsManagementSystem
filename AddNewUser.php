<?php
include("connection.php");
include("sessionlock.php");
 
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
      <li><a href="setting.php">settings</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php echo " ".$fullname.""?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
     <div class="col-sm-2">
                   
         <h5><b>List of users</b></h5>

      <h5>
         <div class="list-group">
          
               
         <a href="AssetDescription.php" class="list-group-item">Assets description</a>
         <a href="AddAsset.php" class="list-group-item">Add asset</a>
         <a href="ViewAssets.php" class="list-group-item">View assets</a>
         <a href="AssetCategory.php" class="list-group-item">Assets category</a>
         <a href="ViewReport.php" class="list-group-item">Assets report</a>
         
         </div></h5>
      </div>
      
      <div class="col-sm-8">
 

   <center> <h2>User registration form</h2></center>
  <form class="form-horizontal" role="form" method="post" action="AddUser.php">
    <div class="form-group">
  <label class="control-label col-sm-3" for="FullName">Full name:</label>  
  <div class="col-md-3">
  <input id="fname" name="FName" placeholder="first name" class="form-control input-md" required="" type="text">
    </div>
     <div class="col-md-3">
  <input id="mname" name="MName" placeholder="second name" class="form-control input-md" required="" type="text">
    </div> 
  <div class="col-md-3">
  <input id="lname" name="LName" placeholder="third name" class="form-control input-md" required="" type="text">
    
  </div>
</div>
 <div class="form-group">
  <label class="control-label col-sm-3" for="DOB">Date of birth:</label>  
  <div class="col-md-4">
  <input id="dob" name="Dob" placeholder="date of birth" class="form-control input-md" required="" type="date">
    </div>
    </div>
 <div class="form-group">
  <label class="control-label col-sm-3" for="Age">Age:</label>  
  <div class="col-md-4">
  <input id="Age" name="Age" placeholder="Age" class="form-control input-md" required="" type="number">
    </div>
    </div>
<div class="form-group">
  <label class="control-label col-sm-3" for="gender">Gender:</label>
  <div class="col-md-4">
    <select id="gender" name="Gender" class="form-control">
      <option value="male">male</option>
      <option value="female">Female</option>
      
    </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-3" for="MStatus">Marital status:</label>
  <div class="col-md-4">
    <select id="maritalstatus" name="MaritalStatus" class="form-control">
      <option>Married</option>
      <option>Single</option>
      
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-3" for="Address">Address:</label>  
  <div class="col-md-4">
  <input id="address" name="Address" placeholder="" class="form-control input-md" required="" type="text">
    
  </div></div>
    <div class="form-group">
  <label class="control-label col-sm-3" for="model">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="Email" placeholder="Email" class="form-control input-md" required="" type="email">
     </div>
    </div>
    <div class="form-group">
  <label class="control-label col-sm-3" for="category">Phone No:</label>
        <div class="col-sm-4">
  <input id="pnumber" name="PNumber" placeholder="PNumber" class="form-control input-md" required="" type="text">
     </div>
   </div>
<div class="form-group">
  <label class="control-label col-sm-3" for="Department">Department:</label>
        <div class="col-sm-4">
  <select class="form-control" id="department" name="Department">
    <option>IT department</option>
    <option>EState department</option>
    <option>Accountant</option>
  </select>
</div>
</div>

    <div class="form-group">
  <label class="control-label col-sm-3" for="status">Role:</label>
  <div class="col-md-4">
    <select class="form-control" id="role" name="Role">
      <option>Technician</option>
      <option>Engineer</option>
      <option>Accountant</option>
      <option>Human resource officer</option>

    </select>
  </div>
</div>

    <div class="form-group">
  <label class="control-label col-sm-3" for="Admin">Admin ?:</label>
  <div class="col-md-4" id="admin">
  <input type="radio" name="Admin" id="admin" value="Yes"><label>Yes</label>

 <input type="radio" name="Admin" id="admin" value="No"> <label>No</label>

</div>
</div>
<div class="form-group">
  <label class="control-label col-sm-3" for="Date Added">Date Added:</label>  
  <div class="col-md-4">
  <input id="Dateadded" name="DateAdded" placeholder="Date added" class="form-control input-md" required="" type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-3" for="UserId">UserId:</label>  
  <div class="col-md-4">
  <input id="userid" name="UserId" placeholder="user id" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<div class="form-group">
  <label class="control-label col-sm-3" for="Password">Password:</label>  
  <div class="col-md-4">
  <input id="passowrd" name="Password" placeholder="Password" class="form-control input-md" required="" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-3" for="CPassword">Confirm password:</label>  
  <div class="col-md-4">
  <input id="confirm_passowrd" name="CPassword" placeholder="Password" class="form-control input-md" required="" type="password">
    
  </div>
</div>

 
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-3">
        <input type="submit" class="btn btn-success" value="Register" onsubmit="ValidatePassword()"/>

         <input type="reset" class="btn btn-success" value="reset"  class="col-sm-offset-4 col-sm-5" />
</div>
      
    </div>
    <script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
  </form>


</div>
      
</div>
   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2016 </p></center>
    
  
   
</div></div>
    

</body>
</html>