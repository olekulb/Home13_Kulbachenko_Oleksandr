<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "homework13";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
