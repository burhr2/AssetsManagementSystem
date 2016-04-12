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

 
 
</head>
<body>
<div class="container">

  <!-- navbar-fixed-top for fixed top -->
  <nav class="navbar navbar-inverse ">
   <div class="container-fluid" style = "background-color: #005200">
    
    <ul class="nav navbar-nav" style ="color: white">
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="ViewAssets.php">Assets</a></li>
      <li><a href="HomeTask.php">Task</a></li>
      <li><a href="ViewUser.php">User</a></li>
      <li><a href="ViewReport.php">Report</a></li>
      <li><a href="#">settings</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <?php echo " ".$fullname."";?>
</a></li>
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
          
               
         <a href="#" class="list-group-item">Assets description</a>
         <a href="#" class="list-group-item">Add asset</a>
         <a href="#" class="list-group-item">View assets</a>
         <a href="#" class="list-group-item">Assets category</a>
         <a href="#" class="list-group-item">Assets report</a>
         
         </div></h5>
      </div>
      
      <div class="col-sm-8">
 

   <center> <h2>Report form</h2></center>
  <form class="form-horizontal" role="form" method="post" action="report.php">
    <div class="form-group">
  <label class="control-label col-sm-3" for="description">Description:</label>  
  <div class="col-md-3">
  <input id="description" name="Description" placeholder="ddscription" class="form-control input-md" required="" type="text">
    </div>
 
</div>
 <div class="form-group">
  <label class="control-label col-sm-3" for="taskname">Task Name:</label>  
  <div class="col-md-4">
  <input id="tname" name="TName" placeholder="task name" class="form-control input-md" required="" type="text">
    </div>
    </div>
 <div class="form-group">
  <label class="control-label col-sm-3" for="dateadded">Date Added:</label>  
  <div class="col-md-4">
  <input id="dateadded" name="DateAdded" placeholder="date added" class="form-control input-md" required="" type="number">
    </div>
    </div>


<div class="form-group">
  <label class="control-label col-sm-3" for="recommendation">Recommendation:</label>  
  <div class="col-md-4">
  <input id="recommendation" name="Recommendation" placeholder="recommendation" class="form-control input-md" required="" type="text">
  </div>
</div>
   
  </form>

</div>
      
</div>
   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2016 </p></center>
    
  
   
</div></div>
    

</body>
</html>