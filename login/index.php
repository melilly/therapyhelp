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
      <div class="tab active" id="login">
        <h1>Log In To Your Account</h1>
        <div class="field">
          <label>Email</label>
          <input class="email" type="email"/>
        </div>
        <div class="field">
          <label>Password</label>
          <input class="pw" type="text"/>
        </div>
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
      <button class="submit" onclick="submitData()">Submit</button>
    </div>
  </div>
  <script src="script.js"></script>
  </body>

</html>