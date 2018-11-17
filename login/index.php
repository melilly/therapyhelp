<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login to TherapyHelp</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="parent">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sign In</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="tab active" id="login">
        <h1>Log In To Your Account</h1>
        <form action="check.php" method="POST">
          <div class="field">
          <label>Email</label>
          <input class="email" type="email" name="email"/>
        </div>
        <div class="field">
          <label>Password</label>
          <input class="pw" type="text" name="Password"/>
        </div>
        <input type="submit" name="submit" value="Submit"> 
        </form>
      </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <form action="insert.php" method="POST">
          <div class="field">
          <label>First Name</label>
          <input class="fname" type="text"name="first_name"/>
        </div>
        <div class="field">
          <label>Last Name</label>
          <input class="lname" type="text"name=" last_name"/>
        </div>
        <div class="field">
          <label>Email</label>
          <input class="email" type="email" name="email"/>
        </div>
        <div class="field">
          <label>Password</label>
          <input class="pw" type="text"name="pw"/>
        </div>
        <div class="field">
          <label>Retype Password</label>
          <input class="pw" type="text"/>
        </div>
        <ul>
          <li style="list-style: none">  <input type="radio" name="type" value="1"> Seeking Help</li>
          <li style="list-style: none"><input type="radio" name="type" value="0"> Wanting To help</li></li>
        </ul>
        <input type="submit" name="submit" value="Submit"> 
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  </body>

</html>