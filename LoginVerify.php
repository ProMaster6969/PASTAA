<?
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
    //

    ?>