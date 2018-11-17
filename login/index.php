<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>repl.it</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
</div>


  </div>
	<div class="box">
		<div class="box-section">
      <button class="tab" onclick="openTab(event, login)">
        Log In
      </button>
      <button class="tab" onclick="openTab(event, signup)">
        Sign Up
      </button>
    </div>
    <div class="box-section" id="main-content">
      <div class="tab-content" id="signup">
        <h1>Create Your Account</h1>
        <div class="field">
          <label class="signup-field" id="fname">First Name</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label class="signup-field" id="lname">Last Name</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label class="signup-field" id="email">Email</label>
          <input type="email"/>
        </div>
        <div class="field">
          <label class="signup-field" id="pw">Password</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label class="signup-field" id="pw-again">Retype Password</label>
          <input type="text"/>
        </div>
        <div>
          <ul>
            <li>Professional</li>
            <li>Client</li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="login">
        <h1>Log In To Your Account</h1>
        <div class="field">
          <label class="login-field" id="email">Email</label>
          <input type="email"/>
        </div>
        <div class="field">
          <label class="login-field" id="pw">Password</label>
          <input type="text"/>
        </div>
      </div>
      <div>
        <button class="submit" onclick="submitData()">Submit</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>