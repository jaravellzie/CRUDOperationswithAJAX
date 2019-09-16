<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Connection Failed".mysqli_connect_error());
}
echo "Database Connected Successfully nothing to worry! <br>";