<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapysite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
// Escape user inputs for security
$date = mysqli_real_escape_string($conn, $_REQUEST['dateNext']);
$Time = mysqli_real_escape_string($conn, $_REQUEST['appt']);

// Attempt insert query execution
 $sql = "UPDATE `session` SET `next_session`=$date,`next_time`=$Time WHERE client_id = 1";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>