<?php
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users(username,password) VALUES (\"$uname\",\"$pwd\")";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
