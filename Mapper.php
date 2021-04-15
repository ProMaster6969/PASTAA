<?php

require_once "DataBaseConfig.php";

class Mapper extends DataBaseConfig

{

    private $connection;
    private $query;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

   
    
    public function getUserByUsername($username)
    {
        $this->query = "select * from user where name=:name";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":name", $username);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
       
    }

    public function insertUser(\Simpleuser $user)
    {
        $this->query = "insert into user (name,email,password, role) values (:name,:mail,:password,:role)";
        $statement = $this->connection->prepare($this->query);
        $username = $user->getUserName();
        $email=$user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":name", $username);
        $statement->bindParam(":mail", $email);
        $statement->bindParam(":password", $password);
       $statement->bindParam(":role", $role);
        $statement->execute();
    }
	
	public function deleteUser($Id)
    {
        $this->query = "delete from user where ID=:id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":id", $Id);
        $statement->execute();
    }
    public function getAllbyContact(){
        $this->query="Select* from contact";
        $statement=$this->connection->prepare($this->query);
        $statement->execute();
        return $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function InsertintoContact($ID,$name,$message){
        $this->query="insert into contact(ID,name,message)values(:ID,:name,:message)";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":ID",$ID);
        $statement->bindParam(":name",$name);
        $statement->bindParam(":message",$message);
        $statement->execute();
    }
    public function deleteUsermessage($id){
        $this->query="delete from contact where ID=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
	public function getAlldata($id){
        $this->query="select* from user where ID=:Id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":Id",$id);
        $statement->execute();
        return $result=$statement->fetch(PDO::FETCH_ASSOC);


    }
public function update($id,$name,$email,$role){
        $this->query="update user set name=:name, email=:email, role=:role
        where ID=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->bindParam(":name",$name);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":role",$role);
        $statement->execute();
        


    }
    public function addProduct($foto,$emri,$qmimi){
        $this->query="insert into productss (images,name,price) values (:foto,:name,:price)";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":foto",$foto);
        $statement->bindParam(":name",$emri);
        $statement->bindParam(":price",$qmimi);
        $statement->execute();

    }
    public function getAllProducts(){
        $this->query="select* from productss";
        $statement=$this->connection->prepare($this->query);
        $statement->execute();
         return $resault=$statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteproduct($ID){
        $this->query="delete from productss where ID=:ID";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":ID",$ID);
        $statement->execute();
    }
    public function getProductsbyId($id){
        $this->query="select* from productss where ID=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
         return $resault=$statement->fetch(PDO::FETCH_ASSOC);
    }
    public function updateProduct($id,$foto,$emri,$qmimi){
        $this->query="update  productss set images=:foto,name=:name,price=:price where ID=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->bindParam(":foto",$foto);
        $statement->bindParam(":name",$emri);
        $statement->bindParam(":price",$qmimi);
        $statement->execute();
    
}
public function addedit($name,$id,$time){
    $this->query="insert into edits (username,id,time) values (:username,:id,:time)";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":username",$name);
    $statement->bindParam(":id",$id);
    $statement->bindParam(":time",$time);
    $statement->execute();
}
public function deleteedit(){
    $this->query="delete from edits where id=0";
    $statement=$this->connection->prepare($this->query);
    $statement->execute();

}
public function getedits(){
    $this->query="select*from edits";
    $statement=$this->connection->prepare($this->query);
    $statement->execute();
     return $resault=$statement->fetchAll(PDO::FETCH_ASSOC);
}
public function addadded($name,$prodname,$time){
    $this->query="insert into added (username,prodname,time) values (:username,:id,:time)";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":username",$name);
    $statement->bindParam(":id",$prodname);
    $statement->bindParam(":time",$time);
    $statement->execute();
}
public function getadded(){

    $this->query="select *from added";
    $statement=$this->connection->prepare($this->query);
    $statement->execute();
     return $resault=$statement->fetchAll(PDO::FETCH_ASSOC);
}
public function getProjekti($id){
    $this->query="select text  from projekti where ID=:id ";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":id",$id);
    $statement->execute();
    return $resault =$statement->fetch(PDO::FETCH_ASSOC);
}
public function getService($id){
    $this->query="select text  from service where ID=:id ";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":id",$id);
    $statement->execute();
    return $resault =$statement->fetch(PDO::FETCH_ASSOC);
}
public function getAbout($id){
    $this->query="select text  from about where ID=:id ";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":id",$id);
    $statement->execute();
    return $resault =$statement->fetch(PDO::FETCH_ASSOC);
}
public function getFooter($id){
    $this->query="select text  from footer where ID=:id ";
    $statement=$this->connection->prepare($this->query);
    $statement->bindParam(":id",$id);
    $statement->execute();
    return $resault =$statement->fetch(PDO::FETCH_ASSOC);
}

}
    





?>
