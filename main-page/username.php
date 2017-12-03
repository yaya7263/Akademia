<?php

$username = $_REQUEST['username'];

$connection = new mysqli("localhost","Shinobi","Shinobi","akademia");

if ($connection->connect_error){
	echo "fail";
}	
else {
}
$sql = "CREATE TABLE $username (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(30) NOT NULL,
answer VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}

header("Location: http://localhost/main-page/index.html");

?>