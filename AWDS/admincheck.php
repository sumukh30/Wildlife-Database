<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$username=$_POST['username'];
$password=$_POST['pass'];

$sql="select * from admin where username='$username' and password='$password'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0){
	echo "<script>alert('Admin successfully logged in');window.location='adminhome.php'</script>";
}

else{
	echo "<script>alert('Not an admin');window.location='adminlog.php'</script>";
}



?>