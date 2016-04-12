<?php
include("connection.php");
include("sessionlock.php");
include("pagination.php");
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
      <li><a href="AssetHome.php">Assets</a></li>
      <li><a href="HomeTask.php">Task</a></li>
      <li><a href="ViewUser.php">User</a></li>
      <li><a href="ViewReport.php">Report</a></li>
      <li><a href="#">settings</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php echo " ".$fullname."";?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    
    

      
      <div class="col-md-12">
        <div class="table-responsive" style="height:600px">
      <h3>ASSETS</h3>
      <table class="table">
    <thead>
      <tr>
       <th>Id</th>
        <th>Assets name</th>
        <th>Description</th>
         <th>Category</th>
        <th>Location</th>
        <th>Serial No</th>
        <th>Model</th>
        <th>Price</th>
        

      </tr>
    </thead>
     <?php
while ($row=mysql_fetch_array($query)){

    $f1=$row['Id'];
    $f2=$row['AssetName'];
    $f3=$row['Description'];
    $f4=$row['Category'];  
    $f5=$row['Location']; 
    $f6=$row['SerialNo'];  
    $f7=$row['Model']; 
    $f8=$row['Price'];  
 


    ?><tr>
      <td><?php echo $f1 ?></td>
      <td><?php echo $f2 ?></td>
      <td><?php echo $f3 ?></td>
      <td><?php echo $f4 ?></td>
      <td><?php echo $f5 ?></td>
      <td><?php echo $f6 ?></td>
      <td><?php echo $f7 ?></td>
      <td><?php echo $f8 ?></td>



      </tr>
      <?php
}
      ?>
    </table>
    
  <center><nav>
  <ul class="pagination">
  <li><a href="#"><?php echo $pagination ;?></a></li>
 
</ul>
</nav></center>
      
      
  </div>
      

   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2015 </p></center>
    
  
   </div>
</div>
    

</body>
</html>