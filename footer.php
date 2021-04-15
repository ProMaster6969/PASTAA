<?php
require_once "Mapper.php";
$mapper=new Mapper();
echo "<footer>".
        "<div class=\"container-fluid footer\">".
          "<div class=\"container col-sm-12 col-md-11 col-lg-7 pt-5\">"
            ."<div class=\"row\">

               <div class=\"col-md-4 col-lg-4 pb-4\">
                  <img src=\"Photos/logo.png\" class=\"pb-3\"><br>
                  <i class=\"fa fa-facebook\"></i>
                  <i class=\"fa fa-twitter\"></i>
                  <i class=\"fa fa-youtube\"></i>
               </div>

               <div class=\"col-md-4 col-lg-4\">";
                 echo $mapper->getFooter(1)['text'];
                 echo $mapper->getFooter(2)['text'];
               echo"</div>

               <div class=\"col-md-4 col-lg-4 ndryshe pb-5\">";
               echo $mapper->getFooter(3)['text'];
                 
               echo
                 " <ul>
                    <li><i class=\"fa fa-clock-o pr-2\"></i>"; echo $mapper->getFooter(4)['text']."</li>
                    <li><i class=\"fa fa-phone pr-2\"></i>";echo  $mapper->getFooter(5)['text']."</li>
                    <li><i class=\"fa fa-envelope-o pr-2\"></i>"; echo $mapper->getFooter(6)['text'].
                 " </ul>
               </div>
               
              
              

              
            </div>    
            <div class=\"col-12 special\">
                <hr>";
                echo $mapper->getFooter(7)['text'].
             "</div>
          </div>      
        </div>
     </footer>";
     ?>
