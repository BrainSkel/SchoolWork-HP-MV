<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPaswd = "";
$dBName = "examsdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPaswd, $dBName);

if(!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>