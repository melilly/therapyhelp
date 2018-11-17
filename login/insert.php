<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "therapysite");
 
// Check connection
if($link->connect_error){
    die("ERROR: Could not connect. " . $link->connect_error);
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['pw']);
// Attempt insert query execution
//$sql = "INSERT INTO `user`( `fName`, `lName`, `email`, `password`, `isVerified`, `isClient`)
        //VALUES ()"
if($link->query($sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not to execute $sql. " . $link->error;
}
 
// Close connection
$link->close();
?>