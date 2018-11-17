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
            <a class="nav-link" href="../profile/profile.php">Your Profile</a>
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
        <div class="search">
          <div class="name">
            <input type="text" placeholder="Name..." name="Name">
      </div>
       <div class="Location">
          <input type="text" placeholder="Location..." name="Location">
           <label class="checkbox"> 
            <input type="checkbox" checked="checked">
            Online only
           </label>
       </div>
       <div class="Hourly">
          <input type="text" placeholder="Minimum Hourly rate.." name="Hourly rate minimum">
          <input type="text" placeholder="Maximum Hourly rate.." name="Hourly rate maximum">
        </div>
      <p> Specialties</p>
      <div>
           <label class="checkbox"> 
            <input type="checkbox" checked="checked">
            Marriage and family counseling.
           </label>
      </div>
      <div>
           <label class="checkbox">
            <input type="checkbox" checked="checked">
            Guidance and career counseling.
           </label>
      </div>
      <div>
             <label class="checkbox">
            <input type="checkbox" checked="checked">
            Rehabilitation counseling.
           </label>
      </div>
      <div>
           <label class="checkbox">
            <input type="checkbox" checked="checked">
            Mental health counseling
           </label>
      </div>
      <div>
           <label class="checkbox">
            <input type="checkbox" checked="checked">
            Substance abuse counseling
           </label>
      </div>
      <div>
           <label class="checkbox">
            <input type="checkbox" checked="checked">
            Educational Counseling.
           </label>
      </div>
      <button>Search</button>
    </div>
	</div>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>