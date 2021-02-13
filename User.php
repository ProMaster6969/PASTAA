<?php

abstract class User
{
    protected $name;
    protected $email;
    protected $password;
    protected $role;

    function __construct($name,$email, $password,$role)
    {
        $this->name = $name;
        $this->email=$email;
        $this->password = $password;
        $this->role=$role;
    }

    abstract protected function setSession();
    
}
