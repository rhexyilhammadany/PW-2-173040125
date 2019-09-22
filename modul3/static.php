<?php

function varstatic() {
	static $x = 1 ; 
	echo $x;
	$x++;
	echo "</br>";

}

varstatic();
varstatic();
varstatic();
echo "</br>";
?>

<button>
	<a href="../"> Back To Index </a>
</button>
