<?php 

  $asean = [
  	        ["Indonesia ", "D.K.I.jakarta","+62"],
			["Singapura", "Singapura","+65"],
			["Malaysia", "Kuala lumpur","+60"],
			["Brunei", "bandar sari bengawan","+673"],
			["Thailand", "bangkok","+66"],
			["laos", "vientiane","+856"],
			["filipin", "manila","+63"],
			["myanmar", "nayphidaw","+95"]
		];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table border="1" cellspacing="0" cellpadding="10">
 		<tr>
			<th>Negara</th>
			<th>ibukota</th>
			<th>Kode telpon</th>
	</tr>	

 
 	
 	<?php 
			for ($i=0; $i < count($asean) ; $i++) { 
				for ($j=0; $j < 3 ; $j++) { 
					echo "<td>".$asean[$i][$j]."</td>" ;					
				}
				echo "</tr>";
			}
		 ?>
	</table>
    <br>
	<button>
	<a href="../"> Back To Index </a>
</button>
 </body>
 </body>
 </html>