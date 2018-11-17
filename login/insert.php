<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "therapysite");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['pw']);
$isClient = mysqli_real_escape_string($link, $_REQUEST['radio']);
// Attempt insert query execution
 $sql = "INSERT INTO `user`( `fName`, `lName`, `email`, `password`, `isVerified`, `isClient`)
        VALUES ($fName, $lName, $email, $pw, $radio)";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "<h3>Sucess</h3>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<h3>Fail</h3>";
}
 
// Close connection
mysqli_close($link);
?>