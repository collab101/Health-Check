<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE main ( name varchar(20) NOT NULL, age int(4) NOT NULL, gender varchar(20) NOT NULL, id varchar(20) NOT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
    echo "Table main created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
