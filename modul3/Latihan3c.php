<?php
 

 function pangkat ($angka,$pangkat){
 	$hasil = 1;
 	for ($i = 1; $i <= $pangkat ; $i++){
 		$hasil = $hasil * $angka;
 	}
 return "$angka pangkat $pangkat =$hasil";
			}
			echo pangkat (5,4);
			echo "</br>";

?>
<button>
	<a href="../"> Back To Index </a>
</button>
