<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>repl.it</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css" />
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
            <a class="nav-link" href="profile/profile.php">Your Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sessions/sessions.php">Your sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../SearchPage/index.php">Connect with a Professional</a>
          </li>
        </ul>
      </div>
    </nav>
	<div class="container">
     <div class="header">
        <h1><span>Profile</span></h1><hr/>
    </div>
    <div class="edit-profile">
      <form class="form-horizontal" action="/action_page.php">
		<div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10"> 
            <input type="name" class="form-control" id="name" placeholder="Enter name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10"> 
            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-2" for="specialties">Specialties:</label>
          <div class="col-sm-10"> 
            <input type="specialties" class="form-control" id="specialties" placeholder="Enter your specialties">
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-2" for="school">School:</label>
          <div class="col-sm-10"> 
            <input type="school" class="form-control" id="school" placeholder="Enter your school">
          </div>
        </div>
		<div class="form-group">
			<label for="bio">Biography:</label>
			<textarea class="form-control" style="width:900px" rows="4" id="bio"></textarea>
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-2" for="hourlyRate">Hourly Rate:</label>
          <div class="col-sm-10"> 
            <input type="hourlyRate" class="form-control" id="hourlyRate" placeholder="Enter your hourly rate">
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-2" for="location">Location:</label>
          <div class="col-sm-10"> 
            <input type="location" class="form-control" id="location" placeholder="Enter your location">
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
