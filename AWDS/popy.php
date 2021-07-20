<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$scnm=$_POST['Sc_nm'];
$popno=$_POST['pop_nm'];
$loid=$_POST['lo_id'];

if(isset($_POST['sumit'])){
	$sql="insert into animal_population values('$scnm','$popno','$loid')";
	mysqli_query($con,$sql);
	echo "<script>alert('Population details inserted');window.location='dataentmast.php'</script>";
}






?>