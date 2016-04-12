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
      <li><a href="ViewAssets.php">Assets</a></li>
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
    
      <div class="col-md-3">
                   
               </br>   </br>    </br> 
         <h5>Quik links</h5>

      <h5>
         <div class="list-group">
         <a href="ViewAssets.php" class="list-group-item">View assets</a>
         <a href="AddAsset.php" class="list-group-item">Add asset</a>
         <a href="AssetDistribution.php" class="list-group-item">Assets distribution</a>
         <a href="AssetCategory.php" class="list-group-item">Assets category</a>
         <a href="AssetInformation.php" class="list-group-item">Assets information</a>

         </div></h5>
      </div>

      <div class="col-md-9" style = "height: 500px">
      <h3>ASSETS</h3>
      <table class="table">
    <thead>
      <tr>
        <th>Asset Id</th>
        <th>Assets name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Note</th>

      </tr>
    </thead>
    <?php
while ($row=mysql_fetch_array($query)){

    $f1=$row['Id'];
    $f2=$row['AssetName'];
    $f3=$row['Description'];
    $f4=$row['Category'];  
    $f5=$row['Note'];  

    ?><tr>
      <td><?php echo $f1 ?></td>
      <td><?php echo $f2 ?></td>
      <td><?php echo $f3 ?></td>
      <td><?php echo $f4 ?></td>
      <td><?php echo $f5 ?></td>


      </tr>
      <?php
}
      ?>
    </table>
    
  </div>
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

?>