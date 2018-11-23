<?php
function alert($msg)
{
	echo "<script type='text/javascript'>alert('$msg');history.go(-2);</script>";
		
}
session_start();
$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];
$id = $_SESSION['pid'];
$name=$_POST['pname'];
$price=$_POST['pprice'];
$cat=$_POST['pcat'];
$quan=$_POST['pquan'];
$desc=$_POST['pdesc'];

$sql="UPDATE PRODUCTS SET p_name='$name',price='$price',quantity='$quan',category='$cat',p_description='$desc',date_updated=CURRENT_TIMESTAMP where p_id='$id';";
$result=mysqli_query($link,$sql);
if($result)
{
	alert("UPDATE SUCCESS");
}


?>