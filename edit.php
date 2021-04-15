<html>
<head>

<title>EDITUSER</title>
<link rel="stylesheet"  href="edit.css?ts=<?=time()?>" type="text/css"/>
</head>
<body>
<?php
include_once 'Mapper.php';
session_start();
if(isset($_GET['ID'])){
    $id=$_GET['ID'];
    
}
$mapper=new Mapper();
$users=$mapper->getAlldata(($id));
?>

<main>
  <div class="form">
                <form  method="post">
                <input style="display:none;" type="number"class="contact-input" name="noedited" value="<?php echo $users['ID'];?>" required/></br>
                       Username:</br>
                    <input type="text" class="contact-input"id="edit-name" name="edit-name" value="<?php echo $users['name'];?>" required/></br>
                    Email</br>
                    <input type="text" class="contact-input" id="edit-email" name="edit-email" value="<?php echo $users['email'];?>" required/></br>
                    Role:</br>
                    <input type="text" class="contact-input"id="edit-role" name="edit-role"value="<?php echo $users['role'];?> " required/></br>

                    <button type="submit" id="letstalk"name="cancele" class="bttn a" >cancel</button>
                     <button type="submit" id="letstalk"name="edit-btn" class="bttn" >edit</button>
                  
                  </form>

               
          </div>
          </main>
          </body>
          </html>
          <?php
          if(isset($_POST['edit-btn'])){
          $edit=new Edit($_POST);
          $edit->verifyData();  
          header("Location:Dashboard.php");    
            
         }
         if(isset($_POST['cancele'])){
             header("Location:Dashboard.php");
         }

         class Edit{
             private $id="";
            private $username ="";
            private  $email ="";
            private $role="";

            public function  __construct($data)
            {
                $this->id=$data['noedited'];
                $this->username=$data['edit-name'];
                $this->email=$data['edit-email'];
                $this->role=$data['edit-role'];

            }
        public function verifyData()
        {
            $userPattern="/^[a-zA-Z0-9]{3,}$/";
            $emailPattern="/^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
            if(preg_match($userPattern,$this->username)&& preg_match($emailPattern,$this->email)&& $this->role>=0 && $this->role<2){
     
                $mapper=new Mapper();
                $mapper->update($this->id,$this->username,$this->email,$this->role);
                
                
                
        }

        }
    }
