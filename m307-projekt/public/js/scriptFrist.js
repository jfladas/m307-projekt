addEventListener("load", function(){
  date = new Date();
  date.setDate(date.getDate() + 5);
  document.querySelector('#frist').value = toDate(date);
    document.getElementById("category").addEventListener("change", function() {
      var days = 5;
      switch (document.querySelector('#category').value) {
        case '1':
          days = 5;
        break;
        case '2':
          days = 8;
        break;
        case '3':
          days = 12;
        break;
        case '4':
          days = 18;
        break;
        default:
          days = 5;
          break;
        }
        var frist = new Date();
        frist.setDate(frist.getDate() + days);
        document.querySelector('#frist').value = toDate(frist);;
    });
});
 function toDate(date){
   var dd = date.getDate();
   var mm = date.getMonth()+1;
   var yyyy = date.getFullYear();
   if(dd<10) {dd='0'+dd;}
   if(mm<10) {mm='0'+mm;}
   date = dd+'.'+mm+'.'+yyyy;
   return date;
 }
