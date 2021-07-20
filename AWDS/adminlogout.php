<?php
session_start();
session_destroy();
unset($_SESSION['username']);

echo "<script>alert('Admin logged out successfully');window.location='Login.php'</script>";


?>