<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "therapysite");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['Password']);
if($email !="" && $password !=""){
	echo $email;
	echo $password;
 	$sql = "SELECT fName FROM user
 		WHERE email='$email' and password='$password'";

 	if ($result=mysqli_query($link,$sql)){
      echo "<script>window.location = '../index.php'</script>";
  	}
  	else{
  	echo("Error description: " . mysqli_error($link));
  	echo " invalid entry";
  }
}
else{
	echo "<script>window.location = 'index.php'</script>";
}
// Attempt insert query executio
  mysqli_close($link);
?>
