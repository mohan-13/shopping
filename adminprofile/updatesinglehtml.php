<?php
session_start();
$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];
$pid=$_POST['id'];
$_SESSION['pid']=$pid;
$result=mysqli_query($link,"SELECT * FROM PRODUCTS WHERE p_id='$pid';");
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" type="text/css" href="vehicleusers/style.css" />
<head>
    <meta charset="UTF-8">
    <title>Update Selected Product</title>
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
</style>
</head>
<body class="vehicle">


<ul>
  <li><a  href="index.html">Home</a></li>
  
  <li><a class="active" href="">Update Selected Product</a></li>
    
    
    <li style="float:right"><a href="">HI! <?php echo $luser ?></a></li>
  <li   style="float:right">
      <a href="logout.php"  >
      <img src="vehicleusers/images/logout2.png" alt="Avatar"  style="width: 75px;border-radius: 100%" >
</a>
</ul>
<form method="post" action="update.php">
<label> Product Name: </label>
<input type="text" name="pname" placeholder="Enter the product name...." value="<?php echo $row['p_name']?>" ><br></br>
<label> Product Price: </label>
<input type="text" name="pprice" placeholder="Enter the product price...." value="<?php echo $row['price']?>"><br></br>
<label> Product Stock: </label>
<input type="text" name="pquan" placeholder="Enter the product available quantity...." value="<?php echo $row['quantity']?>"><br></br>
<label> Product Category: </label>
<input type="text" name="pcat" placeholder="Enter the product category...." value="<?php echo $row['category']?>"><br></br>
<label> Product Description: </label>
<input type="text" name="pdesc" placeholder="Enter the product description...." value="<?php echo $row['p_description']?>"><br></br>

<input type="submit"  id="submit-button"></button>
</form>
<p></p>
<p></p>
<p></p>