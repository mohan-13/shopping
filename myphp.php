<?php
session_start();
?>
<html>
<style>
body {
    background: white url("road.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 1;
    filter:alpha(opacity);
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	text-align: center;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
	text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<body>
<?php
function alert($msg)
{
	echo "<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
}

$user=$_POST["user"];
$pass=$_POST["pass"];

$plink = mysqli_connect("localhost", "root", "","myshop");
$result=mysqli_query($plink,"Select type from userdet where userid='$user' and password=MD5('$pass');");
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==0){
	echo "ACCESSS DENIED";
	alert("ACCESS DENIED.Please verify your credentials!!!");
}
else{
	mysqli_close($plink);
	$row=mysqli_fetch_array($result);
	if($row['type']=='cust')
	{
		echo "ADMIN LOGIN";
		
		$_SESSION['user']=$user;
		$_SESSION['dbuser']='root';
		$_SESSION['dbpassword']='';
		header('Location:custprofile/myprofile.php');
		
	}
	else
	{
		$_SESSION['user']=$user;
		$_SESSION['dbuser']='root';
		$_SESSION['dbpassword']='';
		header('Location:adminprofile');
	}
}



?>
</body>
</html>