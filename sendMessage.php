<?php

$user = $_POST["user"];
$convo = $_POST["convo"];
$message = $_POST["message"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);


$query = "INSERT INTO {$convo} (message,sender) VALUES ('{$message}','{$user}')";
$result = mysqli_query($conn,$query);




?>