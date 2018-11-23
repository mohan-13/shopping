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
    <title>Update Product</title>
	<style> 
	input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border: 2px solid red;
    border-radius: 4px;
	
	
}
input[type=text]:focus {
    border: 3px solid #555;
}
	input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
	border-radius: 4px;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
button[type=submit] {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #008000;
}
</style>
</head>
<body class="vehicle">


<ul>
  <li><a  href="index.html">Home</a></li>
  
  <li><a class="active" href="">Product Updation</a></li>
    
    
    <li style="float:right"><a href="">HI! <?php echo $luser ?></a></li>
  <li   style="float:right">
      <a href="logout.php"  >
      <img src="vehicleusers/images/logout2.png" alt="Avatar"  style="width: 75px;border-radius: 100%" >
</a>
</ul>
<!--<form method="post" action="list.php">
<input type="text" name="pname" placeholder="Enter the product to delete....">
<input type="submit"  id="submit-button"></button>
</form>
<p></p>-->

<?php
	
	
	$sql="Select * from products;";
	
	if($result = mysqli_query($link, $sql)){
		

		if(mysqli_num_rows($result) > 0){
			echo "<table id=customers>";
				echo "<tr>";
					echo "<th>Product ID</th>";
					echo "<th>Product Name</th>";
					echo "<th>Category </th>";
					echo "<th>Unit Price</th>";
					echo "<th>Available Stock</th>";
					echo "<th>Last Update On</th>";
					echo "<th>Action</th>";
					
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['p_id'] . "</td>";
					echo "<td>" . $row['p_name'] . "</td>";
					echo "<td>" . $row['category'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['quantity']. "</td>";
					echo "<td>". $row['date_updated']. "</td>";
					$rid=$row['p_id'];
					echo "<td><form method=\"POST\" action=\"updatesinglehtml.php\">
					<input type=\"hidden\" name=\"id\" value=$rid>
					<button type=\"submit\" class='del-btn' >UPDATE </button></form></td>";
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


