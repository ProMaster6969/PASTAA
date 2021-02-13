<?php
include_once 'User.php';

class Simpleuser extends User
{
    
    public function __construct($name, $email, $password,$role)
    {
        parent::__construct($name,$email, $password,$role);
        
    }

    public function setSession()
    {
        $_SESSION['role'] = 0;
        $_SESSION['rolename'] = 'SimpleUser';
    }
   
    public function getUsername()
    {
        return $this->name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function getRole()
    {
        return $this->role;
    }
    
}