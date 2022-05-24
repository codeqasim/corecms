<?php

// INCLUDE XCRUD
include('xcrud/xcrud.php');

$servername = "localhost";
$database = "";
$username = "root";
$password = "Allah4ever@";

// CREATE CONNECTION
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";

