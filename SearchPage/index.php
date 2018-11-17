<?php
  require_once('search.php');
  if(isset($_REQUEST['Name'])){
    $inresult = getProf();
  }
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>TherapySite</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Therapist</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile/profileProfessional.php">Profesional Profile</a>
          </li> 
         <li class="nav-item">
            <a class="nav-link" href="profile/profileClient.php">Client Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sessions/sessions.php">Your sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Connect with a Professional</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container"  id="searchbox">
        <h1>Find a Professional</h1>
        <form action="index.php" method="POST">
          <div class="search">
        <label> Name</label>
          <div class="name">
            <input type="text" placeholder="Name..." name="Name">
        </div>
        <label> Location</label>
         <div class="Location">
        
            <input type="text" placeholder="Location..." name="Location">
         </div>
         <label>Minimum Hourly Rate</label>
         <div class="Hourly">
        
            <input type="text" placeholder="Minimum Hourly rate.." name="minRate">
       </div>
       <label> Maximum Hourly Rate</label>
       <div> 
       
            <input type="text" placeholder="Maximum Hourly rate.." name="maxRate">
       </div>
        <label> Specialties</label>
        <div>
           <input type="text" placeholder="Specialties" name="specialties">
        </div>
          <ul>
         <?php
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

      $sql = "Select * FROM specialties";
        if ($result=mysqli_query($conn,$sql))
        {
      // Fetch one and one row
      // Free result set
      }

      $conn->close();
      ?> 
      </ul>
        <button>Search</button>
      </div>
    </form>
	</div>
  <div id="results">
    <?php 
     if(isset($_REQUEST['Name'])){
       while ($row=mysqli_fetch_row($inresult)){
      $specialties = "";
      if($row[6]!=0){
        $specialties=$specialties."Depression ";
      }if($row[7]!=0){
        $specialties=$specialties."Developmental  ";
      }if($row[8]!=0){
        $specialties=$specialties."Family ";
      }if($row[9]!=0){
        $specialties=$specialties."Marriage ";
      }
      if($row[10]!=0){
        $specialties=$specialties."Spiritual ";
      }
      if($row[6]!=0){
        $specialties=$specialties."Trama ";
      }
      echo"<div class='container'>
      <h4>$row[0].$row[1]</h4>
      <div class='row'>
        <div class='col'>
          <p>Location:$row[2]</p>
          <p>Rate: $row[3]</p>
          <p>Specialties: .$specialties</p>
        </div>
        <div class='col-7'>
          <h5>Bio: $row[11]</h5>
        </div>
      </div>
    </div>";
  }
     }
    ?>
  </div>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>