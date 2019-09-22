<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3b</title>
</head>
<body>
	<h1>"isset()"</h1>
	<p> isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false.<p>
	<h6>Contoh ;</h6>
	 <?php
     
     if(isset($var)){  
     echo "variable var sudah ada isinya";  
     }else{  
     echo "variable var belum terisi!";  
     }

	 ?>

    <h1>"empty()"</h1>
	<p> empty(), digunakan untuk memeriksa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda dengan isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.<p>
	<h6>Contoh ;</h6>
	 <?php

	  if(empty($var)){  
     echo "variable var sudah ada isinya";  
     }else{  
     echo "variable var belum terisi!";  
     }
     
	 ?>
	<br> 
<button>
	<a href="../"> Back To Index </a>
</button>

</body>
</html>
