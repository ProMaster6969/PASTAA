<?php
require 'Mapper.php';

if (isset($_GET['ID'])) {
    $id=$_GET['ID'];
    $mapper = new Mapper();
    $mapper->deleteproduct($id);
    header("Location:product.php");
}



?>
