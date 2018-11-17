<?php
      session_start();
      $type =$_SESSION['user_Type'];
      $user_id =$_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>TherapySite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <?php
        $professional_id = $name = $next_session=$next_time ="";
        $mysqli = new mysqli("localhost", "root", "", "therapysite");
        $query = "SELECT s.professional_id, s.next_session, s.next_time
                 FROM session s
                 Join client c on c.client_id = s.client_id
                  Join user u on u.id = c.user_id
                 WHERE u.id =$user_id";
        if ($result=mysqli_query($mysqli,$query))
          {
        // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
            {
  
              $professional_id = $row[0];
              $next_session = $row[1];
              $next_time = $row[2];
            }

        // Free result set
        mysqli_free_result($result);
        }
        $name_query = "SELECT u.fName, u.lName
                      FROM user u
                      Join professional p on p.user_id = u.id
                      where p.professional_id = $professional_id";
        if ($result=mysqli_query($mysqli,$name_query))
          {
        // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
            {
              $name = $row[0]." ".$row[1];
            }
        // Free result set
        mysqli_free_result($result);
        }
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
            <a class="nav-link" href="../profile/profile-<?php echo $type?>.php">Profile</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Your sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../SearchPage/index.php">Connect with a Professional</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Your Professional:<?php echo $name?> </h3>
        </div>
        <div class="col">
          <h3 id="date">Your Next Appointment:</h3>
          <button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Schedule an appointment
          </button>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="setTime.php">
              <label for="start">Start date:</label>
              <input type="date" id="start" name="dateNext"
                value=<?php echo $next_session?>
                min="2018-01-01" max="2020-12-31">
            <div style="display: block;">
           <label for="appt">Choose a time for your meeting:</label>
           <input type="time" id="appt" name="appt"
              min="9:00" max="18:00" value="<?php echo $next_time?>" required>
          </div>
            <input type="button" name="submit" value="Submit">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js">
      var date = <?php echo '$next_session' ?>;
      var Ntime = <?php echo "$next_time" ?>;
      document.getElementById("date").addEventListener("load", formatDate(date,Ntime));
    </script>
  </body>
</html>