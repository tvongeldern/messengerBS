<?php

$user = $_POST["user"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SHOW TABLES IN messager";
$result = mysqli_query($conn,$query);

while ($row = $result->fetch_assoc()){
	echo $row[Tables_in_messages];
}

?>