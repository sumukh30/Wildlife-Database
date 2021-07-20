<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$sname=$_POST['Sc_nm'];
$animal_id=$_POST['an_id'];
$aname=$_POST['an_nm'];
$gend=$_POST['gn'];
$length=$_POST['ln'];
$weigth=$_POST['wt'];
$heigth=$_POST['ht'];
$loca_id=$_POST['loc_id'];

$sql="select * from animal_entry where animal_id='$animal_id'";
$res=mysqli_query($con,$sql);
$qry="select * from class_order where sc_nm='$sname'";
$result=mysqli_query($con,$qry);

if(isset($_POST['sumit'])){
	if(mysqli_num_rows($result)<1){
		echo "<script>alert('Animal does not exist in database');window.location='entry.php'</script>";
	}else{
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('Animal_Id already exists');window.location='entry.php'</script>";
	}else{

		$inst="insert into animal_entry values('$sname','$animal_id','$aname','$gend','$length','$weigth','$heigth','$loca_id')";
		mysqli_query($con,$inst);
		echo "<script>alert('Animal details entered successfully');window.location='dataentmast.php'</script>";
}

}
}
if(isset($_POST['del'])){
	$myqry="delete from animal_entry where animal_id='$animal_id'";
	$resu=mysqli_query($con,$myqry);
	echo "<script>alert('Animal details deleted successfully');window.location='dataentmast.php'</script>";

}
if(isset($_POST['updi'])){
	if(mysqli_num_rows($res)<1){
		echo "<script>alert('Animal does not exist in database');window.location='entry.php'</script>";
	}else{
	$myq="update animal_entry set length_cm='$length' where animal_id='$animal_id'";
	$pass=mysqli_query($con,$myq);
	echo "<script>alert('Updated successfully');window.location='dataentmast.php'</script>";

}
}

?>