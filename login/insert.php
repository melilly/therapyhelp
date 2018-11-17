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
if($link->connect_error){
    die("ERROR: Could not connect. " . $link->connect_error);
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['pw']);
$isClient = mysqli_real_escape_string($conn, $_REQUEST['type']);
// Attempt insert query execution
<<<<<<< HEAD
//$sql = "INSERT INTO `user`( `fName`, `lName`, `email`, `password`, `isVerified`, `isClient`)
        //VALUES ()"
if($link->query($sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not to execute $sql. " . $link->error;
=======
 $sql = "INSERT INTO `user`( `fName`, `lName`, `email`, `password`, `isVerified`, `isClient`)VALUES ('$first_name', '$last_name', '$email',' $password', 1, $isClient)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>window.location = 'index.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
>>>>>>> 27e698a9b6740d5aebbd770ca19f2fe837aae6d0
}
 
// Close connection
$link->close();
?>