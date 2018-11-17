function formatDate(date, time) {
  var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();

   document.getElementById("date").innerText = 'Your Next appointment is' + day + ' ' + monthNames[monthIndex] + ' ' + year + 'at' + time;
}

console.log(formatDate(new Date())); 