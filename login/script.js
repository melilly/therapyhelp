function openTab(e, tabID){
  var i, tabcontents;
  tabcontents = document.getElementsByClassName("tab");
  for(i = 0; i < tabcontents.length; i++){
    tabcontents[i].className = tabcontents[i].className.replace(" active", "");
  }
  document.getElementById(tabID).className += " active";
}

  var fields, first, last, email, pw, verifypw;
  fields = document.getElementById("signup");
  first = fields.getElementsByClassName("fname")[0].value;
  last = fields.getElementsByClassName("lname")[0].value;
  email = fields.getElementsByClassName("email")[0].value;
  pw = fields.getElementsByClassName("pw")[0].value;
  verifypw = fields.getElementsByClassName("pw")[1].value;
  alert("signup submitted! last: " + last + " and pw 1&2: " + pw + " " + verifypw);
}