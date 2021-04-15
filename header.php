<?php
session_start();

?>
<?php
echo 
 "<header>
 <div class=\"container\">
 <div id=\"branding\">
     <img src=\"Photos/logo.png\" >
  
 </div>
 <nav>
   <ul>";
   ?>
  
  
   <?php
      if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
      ?>
      <?php
      echo "<li class=\"current\"> <a href=\"Dashboard.php\"> Dashboard</a></li>";
      ?>
      <?php
      }
      ?>

<?php
  
    echo " <li class=\"current\"><a href=\"Projekti.php \">Home</a></li>".
     "<li class=\"current\"><a href=\"services.php\">Services</a></li>
     <li class=\"current\"><a href=\"aboutt.php\">About</a></li>
     <li class=\"current\"><a href=\"product.php\">Product</a></li> ";
     ?> 
     <?php
     if(isset($_SESSION['role'])&& $_SESSION['role']==0){
       ?>
       <?php
      echo "<li class=\"current\"><a href=\"ConatctUs.php\">Contact Us</a></li>";
      ?>
      <?php
     }
     ?>  
    
    
    
    
     <?php
     if (isset($_SESSION['role'])) {
      ?>
       <li class="current"> <a href="logout.php">LOG OUT</a></li>
          
        </a>
      <?php
      }
      ?>
     
   </ul>
 </nav>
</div>
</div>
</header>