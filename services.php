<html>
    <head>
            <link rel="stylesheet" href="services.css?ts=<?=time()?>" type="text/css"/>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
            <title>Services</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
              
           </style>
    </head>
    <body>
    <?php
     include 'header.php';
     require_once 'Mapper.php';
     $mapper=new Mapper();

    ?>
<?php
    echo "<main>".
      "  <section class=\"hero\"> ".
            "<div class=\"bcontainer\">".
               " <div class=\"mesazhi-kryesor\">".$mapper->getService(1)['text'];
                 
                 echo $mapper->getService(2)['text'].
                 $mapper->getService(3)['text'].
                 $mapper->getService(4)['text'];
            
              
                echo"</div>".
           " </div>".
        "</section>".
          
   "<section class=\"heroi\">".
    "<div id=\"slider\">".
         "<figure>".
          
           " <img src=\"Photos/222.jpg\">".
            "<img src=\"Photos/111.jpg\">".
            "<img src=\"Photos/333.jpg\">".
            "<img src=\"Photos/444.jpg\">".
            "<img src=\"Photos/555.jpg\">".
         "</figure>".
  "</div>";

 echo "</section>".
"<section class=\"team\">".
    "<div class=\"teamDiv\">".
        "<div class=\"box1\">".
         
          "<img src=\"Photos/team.jpg\" class=\"teamFoto\">".

        "</div>".
        "<div class=\"box2\">";
         
          echo $mapper->getService(5)['text'];
          echo $mapper->getService(6)['text'];
          echo $mapper->getService(7)['text'];
        echo "</div>".
    "</div>".
"</section>".
    "</main>";
    ?>
    <?php
   include 'footer.php';
    ?>
  
 </body>
</html>