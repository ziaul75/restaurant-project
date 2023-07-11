<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "final_project";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// if (!$conn) {
//     die("connection faild!" . mysqli_connect_error());
// } else {
//     echo "<script>alert('DB Connected!')</script>";
// }