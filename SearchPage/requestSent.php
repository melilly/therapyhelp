<?php
	function sentRequest($pro,$cli){
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
         

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
         $sql = "INSERT INTO `requests`(`user_id`, `professional_id`, `date`, `accepted`) VALUES ($user_id, $pro, $date('Y/m/d'),0 )";
         die($sql);
        if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      }
?>