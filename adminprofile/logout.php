<?php   
function alert($msg)
{
	echo "<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
}
alert("Logged Out Successfully");
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:../index.html"); //to redirect back to "index.php" after logging out
exit();
?>