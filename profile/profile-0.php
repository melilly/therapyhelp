<?php
      session_start();
      $type =$_SESSION['user_Type'];
      $user_id =$_SESSION['id']
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link href="professionalstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "therapysite";
  $type =$_SESSION['user_Type'];
  $user_id =$_SESSION['id']
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT p.user_id, p.location, p.school, p.bio, u.fName, u.lName 
          FROM professional p
          JOIN user u ON p.user_id=u.id
          WHERE p.user_id =$user_id;
          ";
    if ($result=mysqli_query($conn,$sql))
    {
  // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
      {
        $location = $row[1];
        $school = $row[2];
        $bio = $row[3];
        $name = $row[4]. " ". $row[5];
      }
  // Free result set
  mysqli_free_result($result);
  }

  $conn->close();
  ?> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="../index.php">FEEL GOOD INC</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sessions/sessions.php">Your sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Connect with a Professional</a>
          </li>
        </ul>
      </div>
    </nav>
	<div class="container">
     <div class="header">
        <h1><span>Profile</span></h1><hr/>
    </div>
    <div class="profile">
        <h4 class="profileHeading"><span>Professional</span></h4><hr/>
    <button type="button" class="btn btn-outline-dark"><a href="profile-edit.php">Edit Profile</a></button>
    <div class="profileinfo">
    <div class="photo">
       <img class="photo" src= "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"; >
  
    </div>
        <p><span style="color:#9c47e6;font-weight:bold">Name:</span><?php echo $name?> </p>
        <p><span style="color:#9c47e6;font-weight:bold">Type of Practice:</span> Therapy</p>
        <p><span style="color:#9c47e6;font-weight:bold">Specialties: </span> Anxiety, depression, bipolar</p>
        <p><span style="color:#9c47e6;font-weight:bold">School:</span> <?php echo $school?></p>
        <p><span style="color:#9c47e6;font-weight:bold">Biography:</span> <?php echo $bio?></p>
        <p><span style="color:#9c47e6;font-weight:bold">Hourly Rate:</span> $75</p>
        <p><span style="color:#9c47e6;font-weight:bold">Location:</span> <?php echo $location?></p><hr/>
     </div>
      </div>
    </div>   
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
