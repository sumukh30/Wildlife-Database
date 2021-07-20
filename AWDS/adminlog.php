<html>
<head>
	<title>AdminLogin</title>
</head>
<body>
	<h1>KWD&reg; admin login page</h1>
	<h3>Hello admin</h3>
<div class="log">
	<form class="logform" name="loog" action="admincheck.php" method="post">
		<input type="text" name="username" placeholder="Username" required="username">
		<input type="password" name="pass" placeholder="Password" required="pass">
		<button type="submit" value="submit">Login</button>
	</form>

</div>
<p>Not an admin?<a href="Login.php">Back</a></p>


</body>
</html>