<?php
include_once 'Mapper.php';
if (isset($_POST['talk-btn'])){
  
  $contact=new contactVerify($_POST);
   if( !$contact->verifyDB()){
     
       header('Location:ContactUs.php');
   }
   else{
     $array=$contact->verifyDB();
     $mapper=new Mapper();
     $mapper->InsertintoContact($array[0],$array[1],$array[2]);
     header('Location:Projekti.php');
     
   }
}
class contactVerify
{
    private $username ="";
    private $email ="";
    private $message="";

    public function __construct($data)
    {
        $this->username = $data['contact-name'];
        $this->email = $data['contact-email'];
        $this->message=$data['contact-message'];
    }
	public function verifyDB(){
        $messageRegex="/^[a-zA-Z0-9]{5,}$/";
        $mapper=new Mapper();
        $users=$mapper->getAllUsers();
        foreach($users as $u){
        if($this->username==$u['name'] && $this->email==$u['email']){
            if(preg_match($messageRegex,$this->message)){
               $dhanat=[$u['ID'],$u['name'],$this->message];
            return $dhanat;
            }
        }
    }
    return false;


    }
    

}
?>