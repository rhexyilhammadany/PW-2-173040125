<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	  .ganti_style{
	  	font-size: 28px;
	  	font-family: arial;
	  	color: #1A0547;
	  	font-style: italic;
	  	font-weight: bolder;
	  }	
	</style>
</head>
<body>
	   <div>
		<?php
		
		$tulisan = "Hello world! Here I come!";
		$kelas = "ganti_style";

	     function style($tulisan,$kelas){
						echo "<div class= ".$kelas.">$tulisan</p>";
		}			

		 echo style($tulisan,$kelas);
	     echo "</br>";
	   ?>
	</div>
		
<button>
	<a href="../"> Back To Index </a>
</button>	

</body>
</html>