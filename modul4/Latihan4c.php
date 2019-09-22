<?php

$asean = [
     "Indonesia" => "D.K.I Jakarta",
     "Singapura" => "Singapura",
     "Malaysia"  => "Kuala Lumpur",
     "Brunei"    => "Bandar Seri Begawan",
     "Thailand"  => "Bangkok",
     "Laos"      => "Vientiane",
     "Flipina"   => "Manila",
     "Myanmar"   => "Naypyidaw"];

?>
  <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <h1>Daftar Negara Asean dan ibukota :</h1>
 </br>
    <ul>
        <?php 
        foreach ($asean as $negara => $ibukota){
            echo "<li>$negara : $ibukota</li>";
        }
       echo "</br>";
     ?>
        
    </ul>
    
    <button>
    <a href="../"> Back To Index </a>
</button>

 </body>
 </body>
 </html>