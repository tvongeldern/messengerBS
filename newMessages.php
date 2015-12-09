<?php

$user = $_POST["user"];
$counter = $_POST["counter"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM conversations WHERE members LIKE '%{$user}%' AND members NOT LIKE '%{$counter}%'";
$result = mysqli_query($conn,$query);

$a1 = array();

while ($row = $result->fetch_assoc()){
	
	$convo = $row["members"];
	$query2 = "SELECT COUNT(message) FROM {$convo} WHERE sender!='{$user}'";
	$result2 = mysqli_query($conn,$query2);
	$cntr = str_replace($user,"",$convo);
	$cntr = str_replace("_","",$cntr);
	while ($subrow = $result2->fetch_assoc()){
		$num = $subrow["COUNT(message)"];
		$a2 = "sessionStorage.getItem('check_{$cntr}')=='{$num}'";
		array_push($a1,$a2);
	};
};

echo "php = ".json_encode($a1);

?>