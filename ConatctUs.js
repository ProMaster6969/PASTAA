function validate(){
    var email= document.getElementById('email').value;

    var regx =/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    
    if(regx.test(email))
    {
       document.getElementById('lbltext').style.visibility="visible";
    }
}