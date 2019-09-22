<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Looping For Array</title>
</head>
<body>

	<?php 

	  foreach ($nama as $absen ) {
	  	echo "<li>$absen</li>";
	  }
	    echo "</br>";
    ?>

    <button>
	<a href="../"> Back To Index </a>
    </button>
</body>
</html>