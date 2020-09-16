<!DOCTYPE html>
<html>
<body>

<?php
$servername = "192.168.29.7";
$username = "placementoffice";
$password = "poffice@123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else{
    echo "Connected successfully";
}
?>

</body>
</html>