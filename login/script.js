function openTab(e, tabID){
  //TODO error: element never reappears
  var i, tabcontents;
  tabcontents = document.getElementsByClassName("tab");
  for(i = 0; i < tabcontents.length; i++){
    tabcontents[i].className = tabcontents[i].className.replace(" active", "");
  }
  document.getElementById(tabID).className += " active";
}

function submitData(){
  /*if(document.getElementById("login").style.display == "block"){
    submitLoginData();
  }
  if(document.getElementById("signup").style.display == "block"){
    submitSignupData();
  }*/
}
/*
function submitLoginData(){
  var email, pw;
  fields = document.getElementsByClassName("login-field");
  email = fields.getElementById("email");
  pw = fields.getElementById("pw");
  print()
}
function submitSignupData(){
  var first, last, email, pw, verify-pw;
  fields = document.getElementsByClassName("signup-field")
  first = fields.getElementById("fname");
  last = fields.getElementById("lname");
  email = fields.getElementById("email");
  pw = fields.getElementById("pw");
  verify-pw = fields.getElementById("pw-again");
}*/