<?php
$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"animal");
	?>



<html>
<head>
	<title>PopChart</title>
</head>
<style type="text/css">
	h1{
		text-align: center;
	}
	
</style>
<body>
	<h1>Karnataka Wildlife Database&reg;</h1>
<h2>Animal's classification details</h2>
<table border="1">
	<tr>
		<th>Kingdom name</th>
		<th>Phyllum name</th>
		<th>Class name</th>
		<th>Order name</th>
		<th>Family name</th>
		<th>Scientific name</th>
	</tr>
	<?php
	
	$sql="select kingd_nm,phyl_nm,cls_nm,ord_nm,fam_nm,sc_nm from class_order";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while ($row=mysqli_fetch_array($res)) {
			echo "<tr><td>".$row["kingd_nm"]."</td><td>".$row["phyl_nm"]."</td><td>".$row["cls_nm"]."</td><td>".$row["ord_nm"]."</td><td>".$row["fam_nm"]."</td><td>".$row["sc_nm"]."</td></tr>";
			# code...
		}

	}




	?>


</table><br>
<a href="home.php">Home</a>
</body>
</html>





  