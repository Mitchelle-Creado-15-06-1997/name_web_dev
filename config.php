<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'prediction');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("failed to connect to database:" .mysqli_error($con));

$db = mysqli_select_db($con,DB_NAME) or die ("failed to connect to mysquli:".mysqli_error($con));
?>