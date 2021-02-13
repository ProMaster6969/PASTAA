const usernameRegex=/^[a-zA-Z0-9]{3,}$/;
const emailRegex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const messageRegex=/^[a-zA-Z0-9]{5,}$/;


var contact=document.getElementById("letstalk");
var datee=document.getElementsByClassName('contact-input');

 contact.addEventListener('click',function(event){
  // event.preventDefault();
  namee=datee[0].value;
  mail=datee[1].value;
  mesage=datee[2].value;
 
  if(usernameRegex.test(namee)&&emailRegex.test(mail) &&messageRegex.test(mesage) ){
      return true;
  }
  else{
     return false;
  }


 })