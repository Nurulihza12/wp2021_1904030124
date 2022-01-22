<!DOCTYPE html>
<html>
<head>
	<title>pertemuan 4</title>
</head>
<body>
	<h1>Membuat Array</h1>
	<?php
	$values = array(12,13,14,15,20.60);
	var_dump($values);
	echo"<br>"; 
	echo($values[2]);


	echo"<br>";

	$prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
	var_dump($prodi);
	echo"<br>";
	echo "$prodi[1]";

	echo "<br>";
	// mengganti isi value
	$prodi[0] = "T.Bomb";
	var_dump($prodi);

	// menambahkan value
	$prodi[] = "T.Pesawat";
	var_dump($prodi);
	echo "<br>";


	// menghapus salah satu vanue
	usset($prodi[0]);
	var_dump($prodi);

	// menghitung total array
	echo "<br>";
	var_dump(count($prodi));


	?>

	<hr>

	<h1>map dengan array</h1>
	<?php

	$haykal = array(
		"id" => "manizz",
		"nama" => "Haikaludin",
		"umur" => 40
	);

	var_dump($sukisno);
	echo"<br>";
	$drian = [
				"id" => "koh drian",
				"nama" => "Drian larsen",
				"umur" =>21,
				"alamat" => [
						"kota" => "Tangerang", "Prov" => "Banten"
				]

	];

	var_dump($drian);
	echo"<br>";
	echo("nama id :".$drian["id"]);

	echo"<br>";
	echo("nama lengkap :".$drian["nama"]);

	echo"<br>";
	echo("umur :".$drian["umur"]);


	?>

	<hr>
	<h1>Operator Matematika</h1>

	<?php
	$tambah = 20 + 10;
	$kurang = 50 - 10;
	$kali   = 7 * 5;
	$bagi   = 100 / 10;
	$modular = 200 % 3;
	$pangkat  = 9 ** 3;
	echo"Tambah :". $tambah . "<br>";
	echo"kurang :" . $kurang. "<br>";
	echo"kali :" . $kali. "<br>";
	echo"bagi :". $bagi . "<br>";
	echo"modular :". $modular. "<br>";
	echo"pankat :". $pangkat. "<br>";

	?>


	<hr>
	<h2>increment</h2>
	<?php
	$a = 10;
	$a++;
	// $a = $a + 1;
	$a++;
	$a- -;

	echo($a); 


	?>
</body>
</html>