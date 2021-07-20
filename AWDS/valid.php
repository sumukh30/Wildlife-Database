<<?php 
session_start();
$vari=mysqli_connect('localhost','root','');
mysqli_select_db($vari,'userreg');
$name=$_POST['uname'];
$pass=$_POST['pass'];
$ema=$_POST['em'];
$phone=$_POST['phno'];
$gend=$_POST['gend'];
$cit=$_POST['city'];

$s="select * from regdetails where name = '$name'";

$result=mysqli_query($vari,$s);

$reg=" insert into regdetails values('$name','$pass','$ema','$phone','$gend','$cit')";
mysqli_query($vari,$reg);
if ($name==""||$ema=="") {
	header('location:log.php');
	
}
else{

echo "Registration successfull";
}










 ?>