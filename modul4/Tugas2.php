<?php

$perusahaan = [
	 [
	    "nama"              => "Amazon", 
        "pendiri"           => "Jeff Bezos",
        "tahunBerdiri"      => "Juli 1994",
        "kantorPusat"       => "Seattle, Washington, Amerika Serikat" , 
        "produk"            => "A2Z Development, A9.com, Alexa Internet,    
                                Amazon.com, Amazon Kindle, Amazon Studios,  
                                Amazon Web Services, Audible.com, 
                                dpreview.com, Endless.com, IMDb, LoveFilm, 
                                Zappos.com, Woot, Junglee.com .",        
        "gambar"            => "amazon.jpg" 


     ],
      [
        "nama"              => "Apple Inc", 
        "pendiri"           => "Steve Jobs,
                                Steve Wozniak,
                                Ronald Wayne",
        "tahunBerdiri"      => "Januari 1977",
        "kantorPusat"       => "Silicon Valley, Cupertino, California, Amerika  
                                serikat", 
        "produk"            => "Mac, iPod, iPhone, iPad, iPad Mini, Apple 
                                TV, OS X, iLife, iWork, iOS, Apple Watch,
                                Watch OS .",        
        "gambar"            => "apple.jpg" 


     ],
     [
        "nama"              => "Google", 
        "pendiri"           => "Sundar Pichai (CEO)",
        "tahunBerdiri"      => "4 September 1998",
        "kantorPusat"       => "Mountain View, California, Amerika serikat", 
        "produk"            => "teknologi pencarian, komputasi web,   
                                perangkat lunak, dan periklanan 
                                daring.",   
        "gambar"            => "google.jpg" 


     ],
     [
        "nama"              => "Facebook", 
        "pendiri"           => "Mark Zuckerberg, Eduardo Saverin, Andrew 
                                McCollum, Dustin Moskovitz, Chris Hughes",
        "tahunBerdiri"      => "4 Februari 2004",
        "kantorPusat"       => "Menlo Park, California, Amerika Serikat", 
        "produk"            => "Layanan jejaring sosial",   
        "gambar"            => "fb.jpg"  


     ],
     [
        "nama"              => "Microsoft", 
        "pendiri"           => "Bill Gates, Paul Allen",
        "tahunBerdiri"      => "4 April 1975",
        "kantorPusat"       => "Redmond, Washington, Amerika Serikat", 
        "produk"            => "Windows & Windows Live Division, Server and 
                                Tools, Online Services Division, Microsoft 
                                Business Division, Entertainment and Devices 
                                Division.",   
        "gambar"            => "microsoft.jpg" 


     ],
     [
        "nama"              => "Verizon", 
        "pendiri"           => "Lowell McAdam",
        "tahunBerdiri"      => "1983",
        "kantorPusat"       => "New York City, Amerika Serikat.", 
        "produk"            => "telekomunikasi",   
        "gambar"            => "verizon.jpg" 


     ],
      [
        "nama"              => "Walmart", 
        "pendiri"           => "Sam Walton",
        "tahunBerdiri"      => "1962",
        "kantorPusat"       => "Bentonville, Arkansas, Amerika serikat", 
        "produk"            => "Perlengkapan, cash & carry/klub gudang, toko 
                                serba ada diskon, toko diskon, hipermarket/
                                supercenter/supertoko, supermarket",   
        "gambar"            => "walmart.jpg" 


     ],
     
      [
        "nama"              => "ICBC", 
        "pendiri"           => "Jiang Jianqing(Ketua dan Direktur Eksekutif)",
        "tahunBerdiri"      => "1 Januari 1984",
        "kantorPusat"       => "Beijing, Republik Rakyat Tiongkok", 
        "produk"            => "Keuangan dan Asuransi, Perbankan Konsumen,  
                                Perbankan Perusahaan, Bank investasi, Manajemen
                                investasi, Manajemen Kekayaan Global, Ekuitas 
                                swasta, Hipotek, Kartu kredit",   
        "gambar"            => "icbc.jpg" 


     ],
     
      [
        "nama"              => "At&t", 
        "pendiri"           => "Randall L. Stephenson (Chairman, Presiden dan 
                                CEO)",
        "tahunBerdiri"      => "5 Oktober 1983",
        "kantorPusat"       => "Dallas, Texas, Amerika Serikat", 
        "produk"            => "telekomunikasi",   
        "gambar"            => "at&t.jpg" 


     ],
      [
        "nama"              => "Samsung", 
        "pendiri"           => "Lee Kun-hee (Ketua dan CEO),
                                Lee Soo-bin (Presiden, CEO dari Samsung Life 
                                Insurance)",
        "tahunBerdiri"      => "1 Maret 1938",
        "kantorPusat"       => "Samsung Town, Seoul, Korea Selatan
                                ", 
        "produk"            => "Pakaian, otomotif, bahan kimia,
                                elektronik konsumen, komponen 
                                elektronik, peralatan medis, 
                                instrumen presisi, semikonduktor,
                                solid-state drive, DRAM, kapal,
                                peralatan telekomunikasi dan
                                peralatan rumah tangga",   
        "gambar"            => "Samsung.jpg" 


     ]
         
    ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas 2</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <h1 class="text-center"><strong>~Perusahaan Teknologi~</strong></h1>
    <table class ="table table-striped" >
    <thead>
   
    <tr class="danger">
    <th>No</th>
    <th width="200px" class="text-center">Nama Perusahaan</th>
    <th width="230px" class="text-center">Pendiri Perusahaan</th>
    <th width="180px" class="text-center">Tahun Berdiri</th>
    <th width="300px" class="text-center">Kantor Pusat/center></th>
    <th width="300px" class="text-center">Produk</th>
    <th width="250px" class="text-center">Gambar</th>
    </tr>
    <?php $i = 1 ; ?>
    <?php foreach ($perusahaan as $p ) : ?>
    <tr>
     <td class="success"><?php echo $i++; ?></td>
     <td class="active" class="text-center"><strong><?php echo $p ["nama"]; ?></</strong></td>
     <td class="info"><?php echo $p ["pendiri"]; ?></td>
     <td class="warning"><?php echo $p ["tahunBerdiri"]; ?></td>
     <td class="info"><?php echo $p ["kantorPusat"]; ?></td>
     <td class="active"><?php echo $p ["produk"]; ?> </td>
     <td class="success"><img src="../assets/img/<?php echo $p ["gambar"];?>" class="img-thumbnail"></td>
     </tr>
    <?php endforeach; ?>
    </thead>
</table>

 <p>Sumber : Wikipedia</p>
 <br>

 <button>
  <a href="../"> Back To Index </a>
</button>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>