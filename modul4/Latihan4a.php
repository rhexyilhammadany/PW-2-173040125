<?php 

$warna =["hijau" ,"kuning" ,"kelabu" ,"merah muda"];

?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <p>
        Balonku ada lima.</br>
        Rupa-rupa warna-nya </br>
        <?php foreach ($warna as $balon){
            echo "$balon,";
        };
        $warna[] = "biru";
            echo "dan $warna[4]";
         ?> </br>
        meletus balon <?php echo"$warna[0] " ?>Dor!!!</br>
        hatiku sangat kacau
     <br>
    </p>
    <button>
    <a href="../"> Back To Index </a>
</button>
 </body>
 </html>
</html>