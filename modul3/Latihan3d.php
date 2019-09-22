<?php
 

 function factorial ($a){
 	$hasil = 1 ;
 	if ($a > 1) {
 	  for ($i = 2 ; $i <= $a ; $i++){
        $hasil *= $i;
 	  }

 	}
   return "faktorial dari $a =$hasil";
}
 echo factorial(5);
 
 echo "</br>";

?>
<button>
	<a href="../"> Back To Index </a>
</button>
