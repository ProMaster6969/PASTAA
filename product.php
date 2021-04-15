<html>
    <head>
            <link rel="stylesheet" href="product.css?ts=<?=time()?>" type="text/css"/>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <title>Register</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    </head>
    <body>
     
    <?php
    include 'header.php';
    require_once 'Mapper.php';
    $mapper=new Mapper();
    $products=$mapper->getAllProducts();

    ?>
      <main>
      <div class="lnku">
      <?php
      
     if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
      ?>
      <a class =" a butn"href="Upload.php">ADDProducts</a>
      <?php
     }
     ?>
     </div>
     
          <div class="hero">
              <div class="prod">    
                     <?php
                      foreach($products as $prod){
                          ?>
                          <div class=prod-item>
                          <img class="item"src="Photos/<?php echo $prod['images']?>"/>
                          <h3>Name:<?php echo $prod['name']?></h3>
                          <h3>Price:<?php echo $prod['price']?></h3>
                          <?php
                          if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                           ?>

                          <a  class=" b butn"href=<?php  echo"  deleteproduct.php?ID=".$prod['ID'];?>>Delete</a>
                          <a class="butn" href=<?php echo "editproduct.php?ID=".$prod['ID'];?>>Edit</a>
                          <?php
                          }
                          ?>
                         </div>
                         <?php
                      }
                     
                     ?>
              
            </div>
     
    </div>
    

</main>

    <?php
   include 'footer.php';
   ?>
  
     <script src="index.js"></script>
  
 </body>
</html>
