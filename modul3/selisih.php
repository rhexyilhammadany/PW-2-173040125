<?php 

function selisih ($a,$b) {
	if ($a>=$b) {
		return $a-$b;
	} else {
		return $b-$a;
	}
}

echo selisih (10,7);
echo "</br>";
?>
<button>
	<a href="../"> Back To Index </a>
</button>
