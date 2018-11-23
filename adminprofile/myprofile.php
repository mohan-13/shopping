<?php
session_start();

$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="vehicleusers/style.css" />
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body class="profile">


<ul>
  <li><a  href="">Home</a></li>
  <li><a class="active" href="">My Profile</a></li>
  <li><a href="search.php">Product Search</a></li>
    <li><a href="">Bill Check</a></li>
    
    <li style="float:right"><a href="">HI! <?php echo $luser ?></a></li>
  <li   style="float:right">
      <a href="logout.php"  >
      <img src="vehicleusers/images/logout2.png" alt="Avatar"  style="width: 75px;border-radius: 100%" >
</a>
</ul>


  <img src="vehicleusers/images/user.jpg" alt="Avatar" class="image" style="width: 500px" >

<div class="aadhar">
    <p class="aadhar">Your Name:
        <?php echo $luser ?></p>
    <p class="aadhar">Your Address:
        <?php echo "ADMIN" ?></p>
	
</div>







</body>
</html>