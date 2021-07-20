<html>
<head>
	<title>Animal data entry</title>
</head>
<body>
	<h2>KWD&reg;<br>Enter animal details</h2><br>
	<form class="entform" name="ent" action="enter.php" method="post">
		<input type="text" name="Sc_nm" placeholder="Scientific name" required="Sc_nm"><br><br>
		<input type="number" name="an_id" placeholder="Animal_id" required="an_id"><br><br>
		<input type="text" name="an_nm" placeholder="Animal name" ><br><br>
		<input type="text" name="gn" placeholder="Gender" ><br><br>
		<input type="text" name="ln" placeholder="Length" required="ln"><br><br>
		<input type="text" name="wt" placeholder="Weight" ><br><br>
		<input type="text" name="ht" placeholder="Height" ><br><br>
		<input type="number" name="loc_id" placeholder="Location_id" ><br><br><br>
		<input type="Submit" name="sumit" value="Insert">
		<input type="Submit" name="updi" value="Update">
		<input type="Submit" name="del" value="Delete">

	</form>
<a href="dataentmast.php">Back</a>
</body>
</html>