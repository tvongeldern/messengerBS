<?php

$un = $_POST["un"];
$pw = $_POST["pw"];

$servername = "localhost";
$username = "root";
$password = "0ls6z15UDf";
$dbname = "messager";

$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM users WHERE username='{$un}'";
$result = mysqli_query($conn,$query);
$numrows = mysqli_num_rows($result);

if ($numrows > 0){
	while ($row = $result->fetch_assoc()){
		if ($row['passwrd'] == $pw){
			echo "SUCCESS";
		} else {
			echo "PWFAIL";
		};
	}
} else {
	echo "UNFAIL";
}

?>