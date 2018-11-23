<?php
session_start();
$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];
$result=mysqli_query($link,"Select * from customer where c_id=$luser");
$row=mysqli_fetch_array($result);
$uname=$row['c_name'];
?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="vehicleusers/style.css" />
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body class="vehicle">


<ul>
  <li><a  href="">Home</a></li>
  <li><a  href="myprofile.php">My Profile</a></li>
  <li><a class="active" href="">Product Search</a></li>
    <li><a href="">Bill Check</a></li>
    
    <li style="float:right"><a href="test.php">HI! <?php echo $uname ?></a></li>
  <li   style="float:right">
      <a href="logout.php"  >
      <img src="vehicleusers/images/logout2.png" alt="Avatar"  style="width: 75px;border-radius: 100%" >
</a>
</ul>
<?php
	$name=$_POST["pname"];
	
	$sql="Select * from products where p_name like '$name';";
	
	if($result = mysqli_query($link, $sql)){
		

		if(mysqli_num_rows($result) > 0){
			echo "<table id=customers>";
				echo "<tr>";
					echo "<th>Product ID</th>";
					echo "<th>Product Name</th>";
					echo "<th>Unit Price</th>";
					
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['p_id'] . "</td>";
					echo "<td>" . $row['p_name'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					
				echo "</tr>";
			}
			echo "</table>";
			// Free result set
			mysqli_free_result($result);
		} 
		else
		{
			echo "No records matching your query were found.";
		}
		}
		
?>



