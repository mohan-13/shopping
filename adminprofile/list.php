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
<body class="vehicle">


<ul>
  <li><a  href="index.html">Home</a></li>
  
  <li><a class="active" href="">Searched Product</a></li>
    
    
    <li style="float:right"><a href="test.php">HI! <?php echo $luser ?></a></li>
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
					echo "<th>Category </th>";
					echo "<th>Unit Price</th>";
					echo "<th>Available Stock</th>";
					
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['p_id'] . "</td>";
					echo "<td>" . $row['p_name'] . "</td>";
					echo "<td>" . $row['category'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['quantity']. "</td>";
					
				echo "</tr>";
			}
			echo "</table>";
			// Free result set
			mysqli_free_result($result);
		} 
		}
		else
		{
			echo "No records matching your query were found.";
		}
?>



