var x=document.getElementById("login");
var y= document.getElementById("register");
var z=document.getElementById("btn");

function register(){
    x.style.left="-300px";
    y.style.left="60px";
    z.style.left="225px";


}
function login(){
    x.style.left="60px";    
    y.style.left="500px";
    z.style.left="60px";
}

const usernameReg = /^[a-zA-Z0-9]{3,}$/;
const passReg = /^[a-zA-Z0-9]{8,}$/;
const emailReg=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
const mesageReg=/^[a-zA-Z0-9]{5,}$/;

 var sub=document.getElementById('submit');
 sub.addEventListener('click',function(event){
    let date=document.getElementsByClassName("int");
     username= date[0].value;
   password= date[1].value;
  
  
   //event.preventDefault();
   if(usernameReg.test(username) &&  passReg.test(password) ){
       
       return true; 
       
       
   }
   else{
       return false;
   }

   

 })


 var regis=document.getElementById('register-button');
 regis.addEventListener('click',function(event){
   // event.preventDefault();
    let registerdate=document.getElementsByClassName("register-input");
     username= registerdate[0].value;
   email= registerdate[1].value;
   password=registerdate[2].value;
  
   
   if(usernameReg.test(username) && emailReg.test(email) && passReg.test(password)) {
      return true;
   }
   else{
       return false;
   }

   

 })
 
/*var contact=document.getElementsByClassName('contact-input');
console.log(contact);
 
/*contact.addEventListener('click',function(event){
  var datee=document.getElementsByClassName('contact-input');
  event.preventDefault();
 namee=datee[0];
 mail=datee[1];
 mesage=datee[2];
 if(usernameReg.test(namee) && emailReg.test(mail)&& messageRegex.test(mesage)){
     console.log('mir');
 }
 else{
     console.log('keq');
 }


})*/