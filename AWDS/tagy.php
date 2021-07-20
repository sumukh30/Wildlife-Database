<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$anid=$_POST['an_id'];
$scnm=$_POST['Sc_nm'];

$sql="select * from tag_info where animal_id='$anid'";
$res=mysqli_query($con,$sql);

if(isset($_POST['sumit'])){
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('Animal already tagged');window.location='tag_info.php'</script>";
	}else{
		$qry="insert into tag_info values('$anid','$scnm')";
		mysqli_query($con,$qry);
		echo "<script>alert('Tag information recorded');window.location='dataentmast.php'</script>";
	}


}


?>