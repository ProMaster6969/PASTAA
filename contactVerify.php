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
    

}
?>