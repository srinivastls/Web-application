<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "dbs";

$conn = new mysqli($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>