<?php
$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"animal");
	?>


<html>
<head>
	<title>AdminHome</title>
	<link rel="stylesheet"  href="adhomestyle.css">
</head>
<body>
<h1>KWD&reg; Admin Home</h1>
<br>
<h2>Hello Admin....:)</h2>
<a href="adminlogout.php" id="logout">Logout</a>
<br><br><br>
<div class="buttons">
<a href="dataentmast.php"><button type="button" value="submit" >Data Entry</button></a>
<a href="imagedata.php"><button type="button" value="submit" >Image Insert</button></a>
</div>
<br><h2 style="color: black;">Tag information</h2>
<table border="1">
	<tr>
		<th>Animal_Id</th>
		<th>Scientific name</th>

	</tr>
	<?php
	$qry="select animal_id,sc_nm from tag_info";
	$result=mysqli_query($con,$qry);
	if(mysqli_num_rows($result)>0){
		while($row1=mysqli_fetch_array($result)){
			echo "<tr><td>".$row1["animal_id"]."</td><td>".$row1["sc_nm"]."</td></tr>";
		}
	}






	?>
</body>
<style type="text/css">
	body table{
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		color: black;
		
	}

</style>
</html>