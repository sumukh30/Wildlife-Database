<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$username=$_POST['unm'];
$password=$_POST['pwd'];

$s="select * from registration where uname='$username' AND pass='$password'";
$res=mysqli_query($con,$s);




if(mysqli_num_rows($res)>0){
	
	
	echo "<script>alert('Logged in successfully');window.location='home.php'</script>";
	

}else{
	
	echo "<script>alert('Username/Password error...');window.location='Login.php'</script>";
}



?>