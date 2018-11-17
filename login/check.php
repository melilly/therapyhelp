<?php
      session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "root", "", "therapysite");
   
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
   
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $password = mysqli_real_escape_string($link, $_REQUEST['pw']);
  if($email !="" && $password !=""){
  	echo $email;
  	echo $password;
   	$sql = "SELECT isClient, id FROM user
   		WHERE email='$email' and password='$password'";

   	if ($result=mysqli_query($link,$sql)){
        $Client= $id="";
        while ($row=mysqli_fetch_row($result))
        {
            $Client = $row[0];   
            $id = $row[1];

        }

        $_SESSION['user_Type'] = $Client;
        $_SESSION['id'] = $id;

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
