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
  if(document.getElementById("login").className.includes("active")){
    submitLoginData();
  }
  if(document.getElementById("signup").className.includes("active")){
    submitSignupData();
}
function submitLoginData(){
  var fields, email, pw;
  fields = document.getElementById("login");
  email = fields.getElementsByClassName("email")[0].value;
  pw = fields.getElementsByClassName("pw")[0].value;
  alert("log on submitted! email: " + email + " and pw: " + pw);
}
function submitSignupData(){
  var fields, first, last, email, pw, verifypw;
  fields = document.getElementById("signup");
  first = fields.getElementsByClassName("fname")[0].value;
  last = fields.getElementsByClassName("lname")[0].value;
  email = fields.getElementsByClassName("email")[0].value;
  pw = fields.getElementsByClassName("pw")[0].value;
  verifypw = fields.getElementsByClassName("pw")[1].value;
  alert("signup submitted! last: " + last + " and pw 1&2: " + pw + " " + verifypw);
}