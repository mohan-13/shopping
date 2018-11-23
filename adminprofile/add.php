<?php

session_start();
$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];
$name=$_POST['pname'];
$price=$_POST['pprice'];
$quan=$_POST['pquan'];
$desc=$_POST['pdesc'];
$cat=$_POST['pcat'];

$sql="INSERT INTO PRODUCTS (p_name,price,quantity,category,p_description) values ('$name','$price','$quan','$cat','$desc');";
$result=mysqli_query($link,$sql);
echo $result;
if($result)
{
	header('Location:search.php');
	
}
else
	echo $result;

?>
