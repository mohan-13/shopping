<?php
function alert($msg)
{
	echo "<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
		
}
session_start();
$link=mysqli_connect('localhost',$_SESSION['dbuser'],$_SESSION['dbpassword'],'myshop');
$luser=$_SESSION['user'];
$id = $_POST['id'];

$result=mysqli_query($link, "DELETE FROM products WHERE p_id=$id");
if($result)
{
	alert("PRODUCT DELETED");
}
?>