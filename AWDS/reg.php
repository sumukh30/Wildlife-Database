<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$username=$_POST['uname'];
$password=$_POST['pass'];
$email=$_POST['em'];
$phone=$_POST['phno'];
$gnd=$_POST['gend'];
$cit=$_POST['city'];

$s="select * from registration where uname='$username'";

$res=mysqli_query($con,$s);
 $num=mysqli_num_rows($res);

 if($num>0){
 	echo "<script>alert('Username already exists...');window.location='Login.php'</script>";
 }
 else{
 	$regi="insert into registration values('$username','$password','$email','$phone','$gnd','$cit')";
 	mysqli_query($con,$regi);
 	echo "<script>alert('Registration completed successfully...:)');window.location='home.php'</script>";
 	
 }

 ?>