<?php
include("connection.php");
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

		<table class="table">
    <thead>
      <tr>
        <th>Assets Id</th>
        <th>Asset name</th>
        <th>Serial No</th>
        <th>Model</th>
        </thead>
      </tr>
      	<?php
while ($row=mysql_fetch_array($query)){

		$f1=$row['Id'];
		$f2=$row['AssetName'];
		$f3=$row['SerialNo'];
		$f4=$row['Model'];	
  	?><tr>
  		<td><?php echo $f1 ?></td>
  		<td><?php echo $f2 ?></td>
  		<td><?php echo $f3 ?></td>
  		<td><?php echo $f4 ?></td>

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
</body>

</html>
