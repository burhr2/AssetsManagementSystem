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
      <li><a href="#"><?php echo " ".$fullname."";?>
 </a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
       <div class="col-md-3">
                  </br>    </br> 
      <h5>
         <div class="list-group">
         <a href="HomeTask.php" class="list-group-item">View task</a>
         <a href="CreateTask.php" class="list-group-item">Asign task</a>
         <a href="AssetDistribution.php" class="list-group-item">Assets distribution</a>
         <a href="AssetCategory.php" class="list-group-item">Task category</a>
         <a href="AssetInformation.php" class="list-group-item">Task information</a>

         </div></h5>
      </div>
      <div class="col-sm-8" style="height:600px">
 

    <center> <h2>Create new task</h2></center>
  <form class="form-horizontal" role="form" method="post" action="AddTask.php">

<div class="form-group">
  <label class="control-label col-sm-3" for="Name">Assign to:</label>
  <div class="col-md-4">
 <select id="fullname" class="form-control" name="FullName">
 <?php
$users="SELECT FullName FROM users WHERE IsAdmin='No'";
$result=mysql_query($users);
 
while ($row=mysql_fetch_array($result)){
        $f1=$row['FullName'];
    ?>
      <option value="<?php echo $f1 ?>"><?php echo $f1 ?></option>

      <?php
}
      ?>
            </select>

  </div>
</div>
 
<div class="form-group">
  <label class="control-label col-sm-3" for="Serial No">Task Name:</label>  
  <div class="col-md-4">
  <input id="TaskName" name="TaskName" placeholder="enter name of the task" class="form-control input-md" required="" type="text">
    
  </div></div>
  <div class="form-group">
  <label class="control-label col-sm-3" for="model">Task description:</label>  
  <div class="col-md-4">
   <textarea class="form-control" name="TaskDescription" rows="5" id="TaskDescription" placeholder="short description of the task"></textarea>

     </div>
    </div>
    <div class="form-group">
  <label class="control-label col-sm-3" for="Description">State:</label>  
  <div class="col-md-4">
  <select id="State" name="State"  class="form-control">
    <option value="emergency">emergency</option>
      <option value="On demand">On demand</option>
     <option value="Schedule">Schedule</option>
    </select>
    
  </div>
</div>

 <div class="form-group">
  <label class="control-label col-sm-3" for="location">Location:</label>
  <div class="col-md-4">
    <select id="Location" class="form-control" name="Location">
      <option value="Iringa Mjini">Iringa Mjini</option>
      <option value="Iringa Vijijini">Iringa Vijijini</option>
      <option value="Kilolo">Kilolo</option>
      <option value="Ludewa">Ludewa</option>
      <option value="Makete">Makete</option>
      <option value="Mufindi">Mufindi</option>
      <option value="Njombe">Njombe</option>

    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-3" for="Serial No">Sub-location:</label>  
  <div class="col-md-4">
  <input id="SubLocation" name="SubLocation" placeholder="sub location" class="form-control input-md" required="" type="text">
    
  </div>
</div>

    
    <div class="form-group">
  <label class="control-label col-sm-3" for="DateAdded">AssignedDate:</label>  
  <div class="col-md-4">
      <input  type="date" id="date" name="DateAdded" placeholder="date of adding" class="form-control input-md" required="">

  </div>
</div>

      <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-5">
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
