<?php

$host = 'ilinkserver.cs.utep.edu';
$db = 'f19_team13';
$username = "mpalacios5";
$password = "db2019";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) die ("Fatal Error");

?>

