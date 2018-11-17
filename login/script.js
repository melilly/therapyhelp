function openTab(e, tabID){
  var i, tabcontents;
  tabcontents = document.getElementsByClassName("tab");
  for(i = 0; i < tabcontents.length; i++){
    tabcontents[i].className = tabcontents[i].className.replace(" active", "");
  }
  headers = document.getElementsByClassName("top");
  for(i = 0; i < headers.length; i++){
    headers[i].className = headers[i].className.replace(" active", "");
  }
  document.getElementById(tabID).className += " active";
  document.getElementById("" + tabID + "-header").className += " active";
}

function submitLoginData(){
  var fields, email, pw;
  fields = document.getElementById("login");
  email = fields.getElementsByClassName("email")[0].value;
  pw = fields.getElementsByClassName("pw")[0].value;
  alert("The following log on information was submitted:\nEmail: " + email + "\nPassword: " + pw);
}
function submitSignupData(){
  var fields, first, last, email, pw, verifypw, account;
  fields = document.getElementById("signup");
  first = fields.getElementsByClassName("fname")[0].value;
  last = fields.getElementsByClassName("lname")[0].value;
  email = fields.getElementsByClassName("email")[0].value;
  pw = fields.getElementsByClassName("pw")[0].value;
  verifypw = fields.getElementsByClassName("pw")[1].value;
  if(fields.getElementsByClassName("account-type")[0].checked){
    account = "Professional";
  }
  if(fields.getElementsByClassName("account-type")[1].checked){
    account = "Client";
  }
  alert("The following sign up information was submitted:\nName: " + first + " " + last + "\nEmail: " + email + "\nPassword: " + pw + "\nRetyped Password: " + verifypw + "\nAccount Type: " + account);
}
