<html>
    <head>
            <link rel="stylesheet" href="ContactUs.css?ts=<?=time()?>" type="text/css"/>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
            <script defer src="index.js"></script>
    </head>
    <body>
       
   <?php
 include 'header.php';
    ?>   
<?php
 echo" <main>".
          "<div class=\"hero\">".
    
               " <h1>Contact Us</h1>".
               
                "<div class=\"form\">".
                "<form action=\"contactVerify.php\" method=\"post\">".
                   " <input type=\"text\" class=\"contact-input\"id=\"name\" name=\"contact-name\" placeholder=\"Name\" required></br>".
                   " <input type=\"text\" class=\"contact-input\" id=\"email\" name=\"contact-email\" placeholder=\"E-Mail\" required></br></br>".
                    "<input type=\"text\" class=\"contact-input\"id=\"mesage\" name=\"contact-message\" placeholder=\"Message\"  required></br>".
        
                 
                  
                   " <button type=\"submit\" id=\"letstalk\"name=\"talk-btn\" class=\"bttn\" >Let's Talk</button></br>".
                  
                  "</form>".
         " </div>".
        
  "</main>";
  ?>
 
  <?php
 include 'footer.php';
  ?>
  
  
  <script src="index2.js"></script>
 </body>
</html>
