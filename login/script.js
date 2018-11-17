function openTab(e, tabID){
  //TODO error: element never reappears
  var i, tabs, tabcontents;
  tabs = document.getElementsByClassName("tab");
  tabcontents = document.getElementsByClassName("tab-content");
  for(i = 0; i < tabcontents.length; i++){
    tabcontents[i].style.display = "none";
    //tabs[i].className = tabs[i].className.replace(" active", "")
  }
  document.getElementById("signup").style.display = "block";
  //e.currentTarget.className += " active"
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