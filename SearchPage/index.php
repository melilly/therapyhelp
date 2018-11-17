<!DOCTYPE html>
<html>

<head>

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
            <a class="nav-link" href="sessions/sessions.php">Your sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Connect with a Professional</a>
          </li>
        </ul>
      </div>
    </nav>
	<h1>Search</h1>
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
    <script src="script.js"></script>
  </body>
</html>