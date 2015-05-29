<?php
$servername = "localhost";
$username = "`root";
$password = "L1v3rb1rd#";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO messages (name, email,phone,message)
VALUES ('$_POST[name]', '$_POST[email]',' $_POST[phone]',' $_POST[message]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>









