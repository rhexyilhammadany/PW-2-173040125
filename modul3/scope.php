<?php
 
 $GLOBALS['varGlobal'] = 18 ;

 function testVar()
 {
 	$varLokal = 1 ;
 	echo"<p> test variabel didalam function . <p>";

 	echo "Varibel global :".$GLOBALS['varGlobal'];
 	echo"<br>";
 	echo "Varibel lokal : $varLokal";
 	echo "<br>";
 }

  testVar();

    echo"<p> test variabel didalam function . <p>";
 	echo "Varibel global : $varGlobal";
 	echo "<br>";

 	echo "Varibel lokal : $varLokal";
 	echo "<br>";
?>

<button>
	<a href="../"> Back To Index </a>
</button>
