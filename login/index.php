<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>repl.it</title>
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
          <label id="email">Email</label>
          <input type="email"/>
        </div>
        <div class="field">
          <label id="pw">Password</label>
          <input type="text"/>
        </div>
      </div>
      <div class="tab" id="signup">
        <h1>Create Your Account</h1>
        <div class="field">
          <label id="fname">First Name</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label id="lname">Last Name</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label id="email">Email</label>
          <input type="email"/>
        </div>
        <div class="field">
          <label id="pw">Password</label>
          <input type="text"/>
        </div>
        <div class="field">
          <label id="pw-again">Retype Password</label>
          <input type="text"/>
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