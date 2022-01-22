<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		PERTEMUAN 3
	</title>
</head>
<body>
	<h1> selamat datang, <?php echo "BAMBANG";  ?></h1>
	<?php
		echo "<h2> di pembelajaran web programming </h2>";
	  ?>

	  <hr>
	  	<h2>tipe data integer</h2>

	  	<?php 
	  		echo"Desimal : "; var_dump(1966); echo"<br>";
	  		echo "octa : "; var_dump(01234); echo "<br>";
	  		echo "Hexadesimal : "; var_dump(0x1a); echo "<br>";
	  		echo "binary: "; var_dump(0b11111); echo "<br>";
	  		echo "underscore di nomor : "; var_dump(1_505_000); echo "<br>";
	  	 ?>

	  	 <hr>
	  	 <h2>Variabel</h2>

	  	 <?php 
	  	 	$nama = "Ilham Romadona";
	  	 	$mk = "Web Programming";
	  	 	$hobi = " Photography";
	  	  ?>


	  	  <h4>Identitas Diri</h4>

	  	  <p>nama : <?php echo $nama; ?></p>
	  	  <p>Mata Kuliah : <?php echo $mk; ?></p>
	  	  <p>hobi : <?php echo $hobi; ?></p>

</body>
</html>