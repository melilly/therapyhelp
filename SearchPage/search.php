<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

function getProf(){
	$link = mysqli_connect("localhost", "root", "", "therapysite");
$nameSql = $locSql = $minSql = $maxSql = "";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$location = mysqli_real_escape_string($link, $_REQUEST['Location']);
$minRate = mysqli_real_escape_string($link, $_REQUEST['minRate']);
$maxRate = mysqli_real_escape_string($link, $_REQUEST['maxRate']);
if($minRate =="")
{
	$minRate = 0;
}
if($maxRate == ""){
	$maxRate = 5000;
}
if($name == ""){
	$nameSql= " u.fName LIKE '%{$name}%' OR u.lName LIKE '%{$name}%' AND p.rate > $minRate AND p.rate < $maxRate";
}
$where= $nameSql;
if($where !=""){
 $where= 'WHERE '.$where;
}
$rsql ="SELECT u.fName, u.lName, p.location, p.rate, p.professional_id, p.isDepression, p.isDevelopmental, p.isFamily, p.isMarriage, p.isSpiritual, p.isTrauma,p.bio 
			FROM user u
			JOIN professional p on u.id = p.user_id
			$where";

if ($inresult=mysqli_query($link,$rsql)){

	return $inresult;
  	}
  	else{
  	echo("Error description: " . mysqli_error($link));
  }
// Attempt insert query executio
  mysqli_close($link);
}
function sentRequest($id){
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
         $pro = mysqli_real_escape_string($conn, $_REQUEST['pro']);
         $date = date('Y/m/d');
         $sql = "INSERT INTO `requests`(`user_id`, `professional_id`, `date`, `accepted`) VALUES ($id, $pro,'$date' ,0 )";
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
