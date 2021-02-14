<?php

include_once 'Admin.php';
include_once 'SimpleUser.php';
require_once 'Mapper.php';

session_start();
if (isset($_POST['submit-btn'])) {
    $login = new loginlogic($_POST);
    if($login->verifyDB()){
       header('Location:Projekti.php');
     
    }
    else{
       
       header('Location:Register.php');
    }
} else if (isset($_POST['register-btn'])) {
    
    $register = new RegisterLogic($_POST);
    $register->verifyData();
   
 header('Location:Projekti.php');
    
}

   else{
        header('Location:Register.php');
    }
class loginlogic
{
    private $username ="";
    private $password ="";

    public function __construct($data)
    {
        $this->username = $data['name'];
        $this->password = $data['password'];
    }
    public function verifyDB(){
        $mapper=new Mapper();
        $users=$mapper->getUserByUsername($this->username);
        
        foreach($users as $u){
        if($this->username==$u['name'] && password_verify( $this->password,$u['password'])){
          if ($u['role'] == 0) {
               
            $user = new SimpleUser( $u['name'],$u['email'] ,$u['password'], $u['role']);
            $user->setSession();
           
        } else {
            $user = new Admin( $u['name'],$u['email'] ,$u['password'], $u['role']);
            $user->setSession();
        }
          return true;  
        }
    }
	return false;
    }
}
class RegisterLogic
{
    private $username = "";
    private $useremail="";
    private $password = "";
   

    public function __construct($data)
    {
        $this->username = $data['register-name'];
        $this->useremail=$data['email'];
        $this->password = $data['register-password'];
       
        
    }
    public function verifyData()
    {
        
        echo $this->username;
        echo $this->useremail;
        echo $this->password;
        if ($this->variablesNotDefinedWell($this->username,$this->useremail, $this->password)) {
            header("Location:Register.php");
        
        } else if ($this->usernameandemailandPasswordCorrect($this->username,$this->useremail ,$this->password)) {
            
             header('Location:Projekti.php');
        } else {
             header("Location:Register.php");
           
        }
    }
    private function variablesNotDefinedWell($username,$email, $password)
    {
        if (empty($username) || empty($password) || empty($email)) {
            return true;
        }
        else{
        return false;
        }
    }

    private function usernameandemailandPasswordCorrect($username,$useremail ,$password)
    {
        $user=null;
      
        $userPattern="/^[a-zA-Z0-9]{3,}$/";
   $emailPattern="/^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
   $passwordPattern="/^[a-zA-Z0-9]{8,}$/";

   if(preg_match($userPattern,$username)&& preg_match($passwordPattern,$password)&& preg_match($emailPattern,$useremail)){
     
        $user=new Simpleuser( $this->username, $this->useremail,$this->password, 0);
        
        
        
}
    if($user!=null){
        
        $this->insertData($user);
        return true;
    }
    return false;
}


    

    public function insertData($user)
    {
        
        $mapper = new Mapper();
        $mapper->insertUser($user);
       
    }
}

    ?>