<?php

$un = $_POST["un"];
$pw = $_POST["pw"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query1 = "SELECT username FROM users WHERE username='{$un}'";
$result1 = mysqli_query($conn,$query1);
$numrows = mysqli_num_rows($result1);

if ($numrows > 0){
	echo "DUPE";
} else {
	$query2 = "INSERT INTO users (username,passwrd,is_on)
	VALUES ('{$un}','{$pw}',0)";
	$result2 = mysqli_query($conn,$query2);
	echo "GOOD";
}

?>