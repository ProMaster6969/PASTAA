<?php
require_once 'User.php';


class Admin extends User
{
    public function __construct($name,$email, $password,$role)
    {
        parent::__construct($name,$emil, $password, $role); 
    }


    public function setSession()
    {

        $_SESSION['role'] = 1;
        $_SESSION['rolename'] = 'Adminuser';
    }

    

    
    public function getName()
    {
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getRole()
    {
        return $this->role;
    }
}

