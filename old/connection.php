<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "storems";

  $conn =   new mysqli($hostName,$userName,$password,$dbName);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>