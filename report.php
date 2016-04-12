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
      <li><a href="#"><?php echo" ".$fullname.""?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
      <div class="col-sm-4">
                   
         <h5><b>Assets management</b></h5>

      <h5>
         <div class="list-group">
          
               
         <a href="AssetDescription.html" class="list-group-item">Report description</a>
         <a href="#" class="list-group-item">View report</a>
         <a href="#" class="list-group-item">Create report</a>
         
         </div></h5>
      </div>
      <div class="col-sm-8">
 

       <h2>Create a report</h2>
  <form class="form-horizontal" role="form" method="post" action="Add.php">

 
<div class="form-group">
  <label class="control-label col-sm-2" for="Serial No">TaskName:</label>  
  <div class="col-md-4">
  <input id="TaskName" name="TaskName" placeholder="enter name of the task" class="form-control input-md" required="" type="text">
    
  </div></div>
 <div class="form-group">
  <label class="control-label col-sm-2" for="Note">Report description:</label>  
  <div class="col-md-4">
    <textarea class="form-control" name="ReportDescription" rows="5" id="Note" placeholder="summary of the report"></textarea>
    </div>

    </div>

     <div class="form-group">
  <label class="control-label col-sm-2" for="DateAdded">DateAdded:</label>  
  <div class="col-md-4">
      <input  type="date" id="date" name="DateAdded" placeholder="date of adding" class="form-control input-md" required="">

  </div>
</div>

    <div class="form-group">
  <label class="control-label col-sm-2" for="Note">Recommendation:</label>  
  <div class="col-md-4">
    <textarea class="form-control" name="Recommendation" rows="5" id="Recommnedation" placeholder="recommendation to the managers"></textarea>
    </div>

    </div>

 
    
   
      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-success">Submit</button>
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
