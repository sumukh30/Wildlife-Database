<html>
<head>
	<title>AnimalGallery</title>
</head>
<body>
	<h1>Karnataka Wildlife Database&reg;</h1>
	<h2>Animal Gallery</h2>
	<h3>Enjoy the beauty of nature...</h3>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"animal");
$qry="select * from image";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){
             echo '<img height="300" width="500" src="data:image;base64,'.$row[2].' "> ';
         }
    ?>
    <br><br><a href="home.php">Back</a>
</body>
<style type="text/css"> 
body{
	text-align: center;
	background-color: beige;

}
body h3{
	font-style: oblique;
}


</style>
</html>








