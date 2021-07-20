<?php
//$hostdb = "localhost";  // MySQl host
//$userdb = "phpmyadmin";  // MySQL username
//$passdb = "23101979";  // MySQL password
//$namedb = "phpmyadmin";  // MySQL database name
//$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

$servername = "localhost";
$username = "phpmyadmin";
$password = "23101979";
$dbname = "phpmyadmin";
$conn = new PDO("mysql:dbname=$dbname;charset=utf8", $username, $password);