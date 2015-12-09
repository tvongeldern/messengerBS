<?php

$input= $_POST["input"];
$search= $_POST["search"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM conversations WHERE members='{$search}'";
$result = mysqli_query($conn,$query);
$number = mysqli_num_rows($result);

if ($number == 0){

	$query1 = "SELECT * FROM users WHERE username='{$input}'";
	$result1 = mysqli_query($conn,$query1);
	$number1 = mysqli_num_rows($result1);

	if ($number1 > 0){
		$query2 = "INSERT INTO conversations VALUES ('{$search}')";
		$result2 = mysqli_query($conn,$query2);
		$query3 = "CREATE TABLE {$search} (msnum int NOT NULL AUTO_INCREMENT, message varchar(150),sender varchar(25), PRIMARY KEY(msnum))";
		$result3 = mysqli_query($conn,$query3);
		echo $search;
	} else {
		echo "NONUSER";
	};

} else {

	echo $search;

};

?>