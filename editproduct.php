<html>
    <head>
        <title>EDITPRODUCT</title>
        <link rel="stylesheet" href="editproduct.css?ts=<?=time()?>" type="text/css"/>
    </head>
</html>
<body>
    <main>

<?php

require_once 'Mapper.php';
session_start();

if(isset($_GET["ID"])){
    $id=$_GET['ID'];

$mapper=new Mapper();
$prod=$mapper->getProductsbyId($id);
$_SESSION['foto']=$prod['images'];
}

?>
<form method="post" class="form" enctype="multipart/form-data">
<input style="display:none;" type="number" name="prod-id" value="<?php echo $prod['ID']?>"/>
<input style="display:none;"type="text" name="maheret" value="<?php echo $prod['images'];?>"/>
Image:</br>
<input type="file"  class="input-field i" name="imagesedit"/><br>


Name:</br>
<input type="text"  class="input-field"value="<?php echo $prod['name']?>" name="product-nameedit"/></br>
Price:</br>
<input type="number" class="input-field" value="<?php echo $prod['price']?>" name="product-priceedit"/></br>
<input  style="display:none;"type="text" value="<?php echo $_SESSION['pordoruesi']?>" name="prodoruesi"/>

<input type="submit" class="bttn" value="edit"name="product-submitedit"/>
<input type="submit" class="bttn a" value="cancele" name="product-canceleedit"/>

</form>
</main>
</body>
<?php
if(isset($_POST['product-submitedit'])){
    $edit=new UploadEdit($_POST);
    $edit->editProduct();
    $editr=new WhoEdited($_POST);
    $editr->registeredit();
   header("Location:product.php");

}
else if(isset($_POST['product-canceleedit'])){
    header("Location:product.php");
}
?>
<?php
class UploadEdit{
    private $id="";
    private $foto="";
    private $emri="";
    private $qmimi="";
    private $target="";
    public function __construct($data){
        $this->id=$data['prod-id'];
        if(empty($_FILES['imagesedit']['name'])){
            
            $this->foto=$data['maheret'];
        }
        else{
           
        $this->foto=$_FILES['imagesedit']['name'];
         $this->target="Photos/".basename($this->foto);
        }
        $this->emri=$data['product-nameedit'];
        $this->qmimi=$data['product-priceedit'];
        

}
public function editProduct(){
    $mapper=new Mapper();
    $mapper->updateProduct($this->id,$this->foto,$this->emri,$this->qmimi);
    if(!empty($_FILES['imagesedit']['name'])){
        
    if(move_uploaded_file($_FILES['imagesedit']['tmp_name'],$this->target));
    }
}
}
class WhoEdited{
    private $Username="";
    private $Prodid="";
    private $dita="";
    public function __construct($data){
        $this->Username=$data['prodoruesi'];
        $this->Prodid=$data['prod-id'];
        $this->dita=gmdate("l jS \of F Y h:i:s ");
    }
    public function registeredit(){
        $mapper=new Mapper();
        $mapper->addedit($this->Username,$this->Prodid,$this->dita);
    }
   
}
?>
