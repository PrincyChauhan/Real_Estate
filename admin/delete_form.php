<?php

include 'include/config.php';

$sid = $_GET['x'];;




mysqli_query($con, "delete from mahatma where id='$sid'");
echo "<script>window.location.href='view_form.php';</script>";
