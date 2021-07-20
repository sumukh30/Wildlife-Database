<html>
<head>
	<title>ImageUpload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<br>
	<input type="file" name="image"><br><br>
	<input type="submit" name="sumit" value="Upload">
</form>
<?php
if(isset($_POST['sumit'])){

	if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
		echo "Please select image";
	}
	else{
		$image=addslashes($_FILES['image']['tmp_name']);
		$name=addslashes($_FILES['image']['name']);
		$image=file_get_contents($image);
		$image=base64_encode($image);
		saveimage($name,$image);
	}
}
displayimage();
function saveimage($name,$image){
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"animal");
	$sql="insert into image (name,img) values ('$name','$image')";
	$res=mysqli_query($con,$sql);
	if($res){
		echo "<br>Image uploaded<br>";
	}else{
		echo "<br>Image not uploaded";
	}
}
function displayimage(){
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,"animal");
	$qry="select * from image";
	$result=mysqli_query($con,$qry);
	while($row=mysqli_fetch_array($result)){
		echo '<img height="300" width="500" src="data:image;base64,'.$row[2].' "> ';
	}
}


  ?><br>
  <a href="adminhome.php">Home</a>
</body>
</html>