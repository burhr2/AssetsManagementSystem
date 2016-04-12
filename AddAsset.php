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
      <li ><a href="assetHome.php">Assets</a></li>
      <li><a href="Hometask.php">Task</a></li>
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
      <div class="col-sm-4">
                   
         <h5><b>Assets management</b></h5>

      <h5>
         <div class="list-group">
          
               
         <a href="AssetDescription.php" class="list-group-item">Assets description</a>
         <a href="AddAsset.php" class="list-group-item">Add asset</a>
         <a href="AssetHome.php" class="list-group-item">View assets</a>
         <a href="AssetCartegory.php" class="list-group-item">Assets category</a>
         <a href="ViewReport.php" class="list-group-item">Assets report</a>
         
         </div></h5>
      </div>
      <div class="col-sm-8">
 

       <h2>Asset registration form</h2>
  <form class="form-horizontal" role="form" method="post" action="registerAsset.php">
    <div class="form-group">
  <label class="control-label col-sm-2" for="assets">Asset Name:</label>
  <div class="col-md-4">
    <select id="Asset" name="AssetName" class="form-control">
      <option value="Luku meter">Luku meter</option>
      <option value="Distribution line">Distribution line</option>
      <option value="Transmission line">Transmission line</option>
      <option value="Transformers">Transformers</option>
      <option value="Electric stands">Electric stands</option>
      <option value="Sub station">Sub station</option>
      <option value="Station">Station</option>
      <option value="Cables">Cables</option>
      <option value="Vehicles">Vehicles</option>
      <option value="Land">office land</option>
      <option value="Building">Office building</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="Serial No">Serial No.</label>  
  <div class="col-md-4">
  <input id="SerialNo" name="SerialNo" placeholder="" class="form-control input-md" required="" type="text">
    
  </div></div>
  <div class="form-group">
  <label class="control-label col-sm-2" for="model">Model:</label>  
  <div class="col-md-4">
  <input id="Model" name="Model" placeholder="model no" class="form-control input-md" required="" type="text">
     </div>
    </div>
    <div class="form-group">
  <label class="control-label col-sm-2" for="Description">Description:</label>  
  <div class="col-md-4">
  <input id="Description" name="Description" placeholder="eg 4kw sub station" class="form-control input-md" required="" type="text">
    
  </div>
</div>

 <div class="form-group">
  <label class="control-label col-sm-2" for="Classification">Classification:</label>
  <div class="col-md-4">
    <select class="form-control" id="Classification" name="Classification">
      <option value="Current">Current asset</option>
      <option value="Non current">Non current asset</option>
    </select>
  </div>
</div>

    
    <div class="form-group">
<label class="control-label col-sm-2" for="category">Category:</label>
        <div class="col-sm-4">
  <select class="form-control" id="Category" name="Category">
    <option value="Furniture">Furniture</option>
    <option value="hardware">vehicle</option>
    <option value="software">hardware</option>
  </select>
</div>
</div>

   <div class="form-group">
  <label class="control-label col-sm-2" for="Price/Value">Price/Value:</label>  
  <div class="col-md-4">
  <input id="Price" name="Price" placeholder="price" class="form-control input-md" required="" type="text">
    
  </div>
</div>

    <div class="form-group">
  <label class="control-label col-sm-2" for="location">Location:</label>
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
  <label class="control-label col-sm-2" for="Serial No">Sub-location:</label>  
  <div class="col-md-4">
  <input id="SubLocation" name="SubLocation" placeholder="sub location" class="form-control input-md" required="" type="text">
    
  </div>
</div>

    
    <div class="form-group">
  <label class="control-label col-sm-2" for="DateAdded">Date added:</label>  
  <div class="col-md-4">
      <input  type="date" id="date" name="DateAdded" placeholder="date of adding" class="form-control input-md" required="">
  </div>
</div>

 <div class="form-group">
  <label class="control-label col-sm-2" for="Price/Value">Expire date:</label>  
  <div class="col-md-4">
      <input id="DateExpire" name="DateExpire" placeholder="expiring date" class="form-control input-md" required="" type="date">

  </div>
</div>
    <div class="form-group">
  <label class="control-label col-sm-2" for="Note">Note:</label>  
  <div class="col-md-4">
    <textarea class="form-control" name="Note" rows="5" id="Note" placeholder="write comment"></textarea>
    </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-success">Register</button>
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
