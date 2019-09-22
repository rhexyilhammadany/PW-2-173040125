<?php 

$negara = ["Indonesia" ,"Singapura" , "Malaysia" ,"
  Brunei" ,"Thailand"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>
  <h1>Daftar Negara Asean Awal :</h1>
 </br>
  <?php 
    foreach ($negara as $asean){
      echo "<li>$asean</li>";
    }
   ?>
   <h1>Daftar Negara Asean Baru :</h1>
   <?php 
    array_push($negara,"laos","filipin","myanmar" );
    

    foreach ($negara as $asean){
      echo "<li>$asean</li>";
    }
     echo "</br>";
   ?>

<button>
  <a href="../"> Back To Index </a>
</button>

 </body>
 </body>
 </html>