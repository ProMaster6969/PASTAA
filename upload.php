<?php
require_once 'Mapper.php';
session_start();
?>
<html>
<head>
<title>Upload</title>
<link rel="stylesheet" href="upload.css?ts=<?=time()?>" type="text/css"/>
</head>
<body>
    <main>
<form method="post"class="form" enctype="multipart/form-data">
Image:</br>
<input type="file" class="input-field i"name="images"/><br>

Name:</br>
<input type="text" class="input-field" placeholder="product name.." name="product-name"/></br>
Price:</br>
<input type="text" class="input-field" placeholder="product price ..." name="product-price"/></br>

<input type="submit" class="bttn" value="upload"name="product-submit"/>
<input type="submit" class="bttn a"value="cancele" name="product-cancele"/>
</form>
</main>
</body>

<?php
if(isset($_POST['product-submit'])){
    $target='Photos/'.basename($_FILES['images']['name']);
$upload=new Upload($_POST);
$upload->insertProduct();
$added=new WhoAdded($_POST);
$added->add();
header("Location:product.php");
}
else if(isset($_POST['product-cancele'])){
    header("Location:product.php");
}

class Upload{
    private $foto="";
    private $emri="";
    private $qmimi="";
    private $target="";
    public function __construct($data){
        $this->foto=$_FILES['images']['name'];
        $this->emri=$data['product-name'];
        $this->qmimi=$data['product-price'];
        $this->target="Photos/".basename($this->foto);


    }
    public function insertProduct(){
        $mapper=new Mapper();
        $mapper->addProduct($this->foto,$this->emri,$this->qmimi);
        if(move_uploaded_file($_FILES['images']['tmp_name'],$this->target));
    }
}
class WhoAdded{
    private $Username="";
    private $Prodname="";
    private $dita="";
    public function __construct($data){
        $this->Username=$_SESSION['pordoruesi'];
        $this->Prodname=$data['product-name'];
        $this->dita=gmdate("l jS \of F Y h:i:s ");
    }
    public function add(){
        $mapper=new Mapper();
        $mapper->addadded($this->Username,$this->Prodname,$this->dita);
    }
   
}


?>


</body>
</html>
