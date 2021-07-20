<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$loid=$_POST['lo_id'];
$lonm=$_POST['loc_nm'];

$sql="select * from location_master where location_id='$loid'";
$res=mysqli_query($con,$sql);


if(isset($_POST['sumit'])){
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('Location already exists');window.location='loc_mast.php'</script>";
	}else{

	$qry="insert into location_master values('$loid','$lonm')";
	mysqli_query($con,$qry);
	echo "<script>alert('Location details inserted');window.location='dataentmast.php'</script>";
}
}





?>