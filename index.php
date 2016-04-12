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
<!--container-fluid-->
  <!-- navbar-fixed-top for fixed top -->
  <nav class="navbar navbar-inverse ">
   <div class="container-fluid" style = "background-color: #005200">
    
    <ul class="nav navbar-nav" style ="color: white">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
      <li><a href="AssetHome.php">Assets</a></li>
      <li><a href="HomeTask.php">Task</a></li>
      <li><a href="users.php">User</a></li>
      <li><a href="ViewReport.php">Report</a></li>
      <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>settings</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <?php echo " ".$fullname."";?></a></li>
      <li><a href="logout.php"> Log out</a></li>
    </ul>
   </div>
  </nav>

  
  <div class="row">
    <div class="col-md-12">
     <marquee> <h4>tanesco assets management system</h4></marquee>
    </div>
      <div class="col-md-3">
                   
         <h5>Quik links</h5>

      <h5>
         <div class="list-group">
         <a href="AddNewUser.php" class="list-group-item">Add user</a>
         <a href="AddAsset.php" class="list-group-item">Add asset</a>
         <a href="AssignTask.php" class="list-group-item">Assign task</a>
         <a href="WriteRecommendation.php" class="list-group-item">Recommendation</a>
         <a href="ViewReport.php" class="list-group-item">Report</a>

         </div></h5>
      </div>
      
      <div class="col-sm-9" style="height:500px">
      <h3>Statistics</h3>
      <div class="col-sm-3">
        <div class="catBox">
         <a href="meter.php" class="catBox-item">Meter Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
          <div class="col-sm-3">
        <div class="catBox">
         <a href="vehicle.php" class="catBox-item">Vehicle Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
          <div class="col-sm-3">
        <div class="catBox">
         <a href="transformer.php" class="catBox-item">Transformer Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
          <div class="col-sm-3">
        <div class="catBox">
         <a href="meter.php" class="catBox-item">Meter Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
          <div class="col-sm-3">
        <div class="catBox">
         <a href="vehicle.php" class="catBox-item">Vehicle Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
          <div class="col-sm-3">
        <div class="catBox">
         <a href="transformer.php" class="catBox-item">Transformer Details</a>
          <p>عَنْ أَبِي هُرَيْرَةَ رَضِيَ اللَّهُ عَنْهُ عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ ((قَالَ اللَّهُ كَذَّبَنِي ابْنُ آدَمَ وَلَمْ يَكُنْ لَهُ ذَلِكَ ، وَشَتَمَنِي وَلَمْ يَكُنْ لَهُ ذَلِكَ ، فَأَمَّا تَكْذِيبُهُ إِيَّايَ ، فَقَوْلُهُ لَنْ يُعِيدَنِي كَمَا بَدَأَنِي وَلَيْسَ أَوَّلُ الْخَلْقِ بِأَهْوَنَ عَلَيَّ مِنْ إِعَادَتِه ،ِ وَأَمَّا شَتْمُهُ إِيَّايَ فَقَوْلُهُ اتَّخَذَ اللَّهُ وَلَدًا وَأَنَا الْأَحَدُ الصَّمَدُ لَمْ أَلِدْ وَلَمْ أُولَدْ وَلَمْ يَكُنْ لِي كُفْئًا أَحَدٌ)) البخاري والنسائ

</p>
       </div>
          </div>
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