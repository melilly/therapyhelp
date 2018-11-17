<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login to TherapyHelp</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="parent">
		<div id="top-content">
      <button onclick="openTab(event, 'login')">
        Log In
      </button>
      <button onclick="openTab(event, 'signup')">
        Sign Up
      </button>
    </div>
    <div id="main-content">
<<<<<<< HEAD
      <form action="login_connect.php" method="post">
        <div class="tab active" id="login">
          <h1>Log In To Your Account</h1>
          <div class="field">
            <label>Email</label>
            <input class="email" type="email" name="email"/>
          </div>
          <div class="field">
            <label>Password</label>
            <input class="pw" type="text" name="password"/>
          </div>
          <button class="submit" onclick="submitLoginData()">Submit</button>
        </div>
      </form>
      <form action="signup_connect.php" method="post">
        <div class="tab" id="signup">
          <h1>Create Your Account</h1>
          <div class="field">
            <label>First Name</label>
            <input class="fname" type="text" name="first_name"/>
          </div>
          <div class="field">
            <label>Last Name</label>
            <input class="lname" type="text" name="last_name"/>
          </div>
          <div class="field">
            <label>Email</label>
            <input class="email" type="email" name="email"/>
          </div>
          <div class="field">
            <label>Password</label>
            <input class="pw" type="text" name="password"/>
          </div>
          <div class="field">
            <label>Retype Password</label>
            <input class="pw" type="text" name="password_again"/>
          </div>
          <div>
            <input type="radio" name="account" class="account-type" value="professional">Professional<br>
            <input type="radio" name="account" class="account-type" value="client">Client<br>
          </div>
          <button class="submit" onclick="submitSignupData()">Submit</button>
        </div>
      </form>
=======
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


      <div class="tab" id="signup">
        <h1>Create Your Account</h1>
        <div class="field">
          <label>First Name</label>
          <input class="fname" type="text"/>
        </div>
        <div class="field">
          <label>Last Name</label>
          <input class="lname" type="text"/>
        </div>
        <div class="field">
          <label>Email</label>
          <input class="email" type="email"/>
        </div>
        <div class="field">
          <label>Password</label>
          <input class="pw" type="text"/>
        </div>
        <div class="field">
          <label>Retype Password</label>
          <input class="pw" type="text"/>
        </div>
        <div>
          <ul>
            <li>Professional</li>
            <li>Client</li>
          </ul>
        </div>
      </div>
>>>>>>> fb0f5af1d2365ee6e2d26d0114a7b907a6790bc3
    </div>
  </div>
  <script src="script.js"></script>
  </body>

</html>