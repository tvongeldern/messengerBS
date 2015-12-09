<?php

$convo = $_POST["convo"];
$user = $_POST["user"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM {$convo}";
$result = mysqli_query($conn,$query);

while ($row = $result->fetch_assoc()){
	
	if ($row['sender'] == $user){
		$class = "from_me";
	} else {
		$class = "from_them";
	};
	
	echo "<tr class='{$class}'><td>".$row['message']."</td></tr>";
	
};



?>