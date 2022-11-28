<?php
ob_start(); // turns on output buffereing. 
session_start();

date_default_timezone_set("Europe/London");

try {
    $con = new PDO("mysql:dbname=crewflix;host=mysql;port=3306", "root", "password");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>