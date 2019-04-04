<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

$cUserName=$_REQUEST["user"];
$cUserPW=$_REQUEST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT username,password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	$dbUN=$row["username"];
    	$dbUPW=$row["password"];
        if(strcmp($dbUN,$cUserName)==0)
        {
        	if(strcmp($dbUPW,$cUserPW)==0)
            {
                header("Location: http://localhost:8012/OEP/loggedin.php"); /* Redirect browser */
                $_SESSION['username']=$dbUN;
                
                exit();

            }
        }
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html