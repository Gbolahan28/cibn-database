<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = '';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error) {
    die("connection failed: " . $db->connect_err);
}
