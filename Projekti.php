<html>
    <head>
        <link rel="stylesheet" href="Styli.css?ts=<?=time()?>" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width">
    </head>
<body>
    <?php
    require_once 'Mapper.php';
    include 'header.php';
    $mapper=new Mapper();
    $p=$mapper->getProjekti(1)['text'];
    
   

    ?>
    <main>
    <?php
    echo "php";
        echo "<section class=\"hero\"> ";
          echo "<div class=\"bcontainer\">";
             echo "  <div class=\"mesazhi-kryesor\">";
             echo "   <h3>$p</h3>";
            
             
               

                  echo $mapper->getProjekti(3)['text'];
                  echo $mapper->getProjekti(4)['text'];
                  echo $mapper->getProjekti(5)['text'];
               echo " </div>"
            ."</div>"
           ."<div class=\"cta\">";
             
           echo "</div>";
           
          
  echo" </section>".
   "<section class=\"experience-outdores\">".
      " <div class=\"bcontainer\">".
           "<div class=\"title-heading\">";
              
               
          echo $mapper->getProjekti(6)['text'];
          echo $mapper->getProjekti(7)['text'];
              echo " <hr class=\"solid\">".
          " </div>"
           ."<div class=\"activities-grid\"> ".   
                "<div class=\"activities-grid-item arrabiata\">";
                   echo $mapper->getProjekti(8)['text'];
                   
                echo " </div>".
                 "<div class=\"activities-grid-item chicken\">".$mapper->getProjekti(9)['text'].
                    
               " </div>";
               
                echo "<div class=\"activities-grid-item napoleoni\">";
                    echo $mapper->getProjekti(10)['text'];
               echo " </div>";

          echo " </div>".
       "</div>".
  " </section>".


   "<section class=\"testimonials\">".
    "<div class=\"bcontainer\">". 
           "<div class=\"testimonial\">"
            ." <div class=\"testimonial-text-box\">".
              " <i class=\'fas fa-quote-right fa1\'>\"</i>";
              echo $mapper->getProjekti(11)['text'];
              
            echo " </div>".
              "<div class=\"testimonial-photo\">".
                 "<img src=\"Photos/Gordon.jpg\" />".
                 $mapper->getProjekti(12)['text'].
              "</div>".
         " </div>".
    "</div>".
"</section>";
?>

    </main>
   <?php
 include 'footer.php';
   ?>
   




    
 </body>
</html>
