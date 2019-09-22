<?php

$mahasiswa = [

            "001" => "Ahmad",
            "002" => "Budi",
            "003" => "Chika",
            "004" => "Dhini",
            "005" => "Erwin"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Associative</title>
</head>
<body>

	<?php foreach ($mahasiswa as $nrp => $nama ) : ?> 
         <li> <?php echo "$nrp : $nama" ?> </li>
    <?php endforeach ?>
	<br>
    <button>
    <a href="../"> Back To Index </a>
    </button>
	

</body>
</html>