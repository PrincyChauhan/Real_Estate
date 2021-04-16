<?php
session_start();
//session_destroy();
unset($_SESSION['email']);
echo "<script>window.location='index.php'</script>";

?>
