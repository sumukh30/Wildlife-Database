<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");
?>


<html>
<head>
	<title>Search</title>
</head>
<body>
	<h1>Karnataka Wildlife Database&reg;</h1>
	<h2>Search Results</h2>
<table border="1">
	<tr>
		<th>Scientific name</th>
		<th>Animal_Id</th>
		<th>Animal name</th>
		<th>Gender</th>
		<th>Location_Id</th>




	</tr>
	<?php

$serch=$_POST['ser'];

$sql="select * from class_order where sc_nm='$serch'";
$res=mysqli_query($con,$sql);


if(isset($_POST['sumit'])){
	if (mysqli_num_rows($res)<1) {
		echo "<script>alert('Invalid animal scientific name');window.location='home.php'</script>";
		# code...
	}else{
		echo "<script>alert('Search successful');</script>";
		$qry="select sc_nm,animal_id,animal_nm,gender,location_id from animal_entry where sc_nm='$serch'";
		$result=mysqli_query($con,$qry);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result)){
				echo "<tr><td>".$row["sc_nm"]."</td><td>".$row["animal_id"]."</td><td>".$row["animal_nm"]."</td><td>".$row["gender"]."</td><td>".$row["location_id"]."</td></tr>";
			}
		}
	}
}
	




?>


</table><br>
<a href="home.php">Home</a>

</body>
<style type="text/css">
	body{
		text-align: left;
	}
	body table{
		text-align: center;
	}
</style>
</html>









