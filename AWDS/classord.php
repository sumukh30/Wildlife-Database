<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$king=$_POST['kingd_nm'];
$phyll=$_POST['phyl_nm'];
$class=$_POST['cls_nm'];
$order=$_POST['ord_nm'];
$family=$_POST['fam_nm'];
$sci=$_POST['Sc_nm'];

$sql="select * from class_order where sc_nm='$sci'";
$res=mysqli_query($con,$sql);

if(isset($_POST['sumit'])){
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('Scientific name already exists');window.location='class_order.php'</script>";
	}else{
	$qry="insert into class_order values('$king','$phyll','$class','$order','$family','$sci')";
	mysqli_query($con,$qry);
	echo "<script>alert('Classification details entered successfully');window.location='dataentmast.php'</script>";
}
}


?>