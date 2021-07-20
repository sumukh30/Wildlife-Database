<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");

$anid=$_POST['an_id'];
$locid=$_POST['lo_id'];
$lat=$_POST['lati'];
$long=$_POST['longi'];
$alt=$_POST['alti'];

$sql="select * from animal_geosite where animal_id='$anid'";
$res=mysqli_query($con,$sql);

if(isset($_POST['sumit'])){
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('Geo-location details already exists');window.location='animal_geo.php'</script>";
	}else{
		$qry="insert into animal_geosite values('$anid','$locid','$lat','$long','$alt')";
		mysqli_query($con,$qry);
		echo "<script>alert('Animal geo-location entered successfully');window.location='dataentmast.php'</script>";
	}


}




?>