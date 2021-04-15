<html>
    <head>
            <link rel="stylesheet" href="aboutt.css?ts=<?=time()?>" type="text/css"/>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
            <title>About</title>
            <meta name=viewport content="width=device-width">
            <style>
              
           </style>
    </head>
    <body>
    <?php
 include 'header.php';
 require_once "Mapper.php";
 $mapper=new Mapper();

?>
<?php
    echo"<main>"
       ." <section class=\"hero\"> ".
            "<div class=\"bcontainer\">".
               " <div class=\"mesazhi-kryesor\">";

                 echo $mapper->getAbout(1)['text'];
                echo $mapper->getAbout(2)['text'].
                $mapper->getAbout(3)['text'].$mapper->getAbout(4)['text'];

              echo " </div>".
            "</div>".
         
          
   "</section>".
   "<section class=\"services container-fluid\">".
    "<div class=\"container\">".
        "<div class=\"row\">".
           " <div class=\"col-md-4 col-lg-4 colum\">".
               " <span class=\"servicesico\"><i aria-hidden=\"true\" class=\"fas fa-trophy\"></i></span>";
             echo $mapper->getAbout(5)['text'].$mapper->getAbout(6)['text'].$mapper->getAbout(7)['text'];
               
                
           echo " </div>".
            "<div class=\"col-md-4 col-lg-4 colum\">".
                "<span class=\"servicesicon\"><i aria-hidden=\"true\" class\"far fa-handshake\"></i></span>".$mapper->getAbout(8)['text'];
               echo $mapper->getAbout(9)['text'].$mapper->getAbout(10)['text'];
           echo " </div>".
            "<div class=\"col-md-4 col-lg-4 colum\">".
               "<span class=\"servicesicon\"><i aria-hidden=\"true\" class=\"fab fa-sketch\"></i></span>";
                echo $mapper->getAbout(11)['text'].$mapper->getAbout(12)['text'];
                
           echo " </div>".
        "</div>".
   " </div>".
"</section>".
  "<section class=\"Mesazhi2\">".
       " <div class=\"hero2\">".
            "<div class=\"p1\">";
              echo $mapper->getAbout(13)['text'].$mapper->getAbout(14)['text'].$mapper->getAbout(15)['text'];
           echo "</div>".
            "<div class=\"p2\">".
               
               "<img class=\"imgsrc\" src=\"Photos/massimo.jpg\" >".
            "</div>".
        "</div>".
  "</section>"


   ." </main>";
   ?>
  <?php
 include 'footer.php';
  ?>
  
 </body>
</html>
