<?php
include("connection.php");
include("sessionlock.php");
 ?>
<html lang="en">
<head>
<title>|home</title> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
 
 
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
 ?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
      <div class="col-md-4">
                   
         <h5>Quik links</h5>

      <h5>
         <div class="list-group">
         <a href="AddUser.html" class="list-group-item">Add user</a>
         <a href="AddAsset.html" class="list-group-item">Add asset</a>
         <a href="#" class="list-group-item">Assign task</a>
         <a href="#" class="list-group-item">Recommendation</a>
         <a href="#" class="list-group-item">Report</a>

         </div></h5>
      </div>
      <div class="col-sm-8">
      <h3>Assets description</h3>

      <p>Classification

Assets may be classified into Current and Non-Current. The distinction is made on the basis of time period in which the economic benefits from the asset will flow to the entity.

Current Assets are ones that an entity expects to use within one-year time from the reporting date.

Non Current Assets are those whose benefits are expected to last more than one year from the reporting date.

Types and Examples

Following are the most common types of Assets and their Classification along with the economic benefits derived from those assets.
Asset   Classification    Economic Benefit
Machine   Non-current   Used for the production of goods for sale to customer.
Office Building   Non-current   Provides space to employees for administering company affairs.
Vehicle   Non-current   Used in the transportation of company products and also for commuting.
Inventory   Current   Cash is generated from the sale of inventory.
Cash    Current   Cash!
Receivables   Current   Will eventually result in inflow of cash.
- See more at: http://accounting-simplified.com/elements-of-financial-statements.html#sthash.4hmWciPr.dpuf
      </p>
      </div>
  </div>
      <div class="col-md-12">
      </div>

   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2015 </p></center>
    
  
   </div>
</div>
 
     

</body>
</html>