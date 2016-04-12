<?php
include("connection.php");
include("sessionlock.php");
include("pagination.php");

 $sql1="SELECT * FROM users";
//CHECK FOR SUCCESS
$query3=mysql_query($sql1);
?>
<html lang="en">
<head>
<title>|home</title> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <script src="jquery.min.js"></script>
<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to delete users?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
 
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
      <li><a href="#"><?php echo "".$fullname."";?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
      <div class="col-md-12">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li><a href="#">Profile</a></li>
      <li><a href="#">Add asset</a></li>
      <li><a href="#">View assets</a></li>
      <li><a href="#">Assets category</a></li>
      <li><a href="#">Assets report</a></li>
      <li><a href="#">tasks on demand</a></li>
      <li><a href="#">done task</a></li>
      <li><a href="#">engineering task</a></li>
      <li><a href="#">technical task</a></li>


    </ul>
  </div>
</nav>

      </div>
      <div class="col-md-12" style="height:500px">
      <h5>Users</h5>
      <form name="bulk_action_form" action="deleteusers.php" method="post" onsubmit="return deleteConfirm();"/>
      <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Full name</th>
        <th>User Id</th>
         <th>Department</th>
        <th>Role</th>
        <th>Date Added</th>
        <th>Email</th>
         <th>Address</th>
         <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        

        

      </tr>
    </thead>
     <?php
 if(mysql_num_rows($query3) > 0){
while ($row=mysql_fetch_array($query3)){

    $f1=$row['Id'];
    $f2=$row['FullName'];
    $f3=$row['UserId'];
    $f4=$row['Department'];  
    $f5=$row['Role'];
    $f6=$row['DateAdded'];  
    $f7=$row['Email']; 
    $f8=$row['Address']; 



  

    ?><tr>
      <td><?php echo $f1 ?></td>
      <td><?php echo $f2 ?></td>
      <td><?php echo $f3 ?></td>
      <td><?php echo $f4 ?></td>
      <td><?php echo $f5 ?></td>
      <td><?php echo $f6 ?></td>
      <td><?php echo $f7 ?></td>
      <td><?php echo $f8 ?></td>
     <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['Id']; ?>"/></td>        





      </tr>
      <?php
}}else{

      ?>
      <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>

    </table>
  </div>
  <center><nav>
  <ul class="pagination">
  <li><a href="#"><?php echo $pagination ;?></a></li>
 <li><input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/></li>
</ul>

</nav></center></form>

  </div>
      

   <div class="col-md-12"  style = "background-color: #005200; color: white">
     <center> <p>Tanesco | ICT | FTP | 2015 </p></center>
    
  
   </div>
</div>
    

</body>
</html>