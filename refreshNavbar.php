<?php

$user = $_POST["user"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM conversations WHERE members LIKE '%_{$user}_%' LIMIT 5";
$result = mysqli_query($conn,$query);

$a1 = array();

while ($row = $result->fetch_assoc()){

	$counter = str_replace("_{$user}_","",$row["members"]);
	$counter = str_replace("_","",$counter);
	array_push($a1,$counter);
	
}

echo "php = ".json_encode($a1);

?>