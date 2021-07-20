<?php
session_start();
session_destroy();
unset($_SESSION['uname']);

echo "<script>alert('Logged out successfully');window.location='Login.php'</script>";


?>