<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "mystore";

  $conn =   new mysqli($hostName,$userName,$password,$dbName);

  $conn->set_charset("utf8mb4");
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>