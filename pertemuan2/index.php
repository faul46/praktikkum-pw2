<?php 
// ini adalah komentar
// ini juga komentar
/*
ini komentar majemuk
ini juga komentar
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Faul Oliber"; // Outputnya adalah "Faul Oliber"
print "Faul Oliber"; // Outputnya adalah "Faul Oliber"
print_r ("Faul Oliber"); // Outputnya adalah "Faul Oliber"
var_dump ("Faul Oliber"); // Outputnya adalah "string(11) "Faul Oliber""
echo 123; // Outputnya adalah "123"
echo true; // Outputnya adalah "1"
echo false; // Outputnya adalah " "
echo "Jum'at"; // Outputnya adalah "Jum'at"

//Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
$nama = "Faul";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar PHP</title>
 </head>
 <body>

 	<h1>Halo, Selamat Datang Faul</h1> <!-- Outputnya adalah "Halo, Selamat Datang Faul" -->

	<!-- versi 1-->
 	<h1>Halo, Selamat Datang
 		<?php
 			echo "Faul"; // Outputnya adalah "Halo, Selamat Datang Faul"
 		?>
 	</h1>
 	<p>
 		<?php
 		echo "ini adalah paragraf"; // Outputnya adalah "ini adalah paragraf"
 		?>
 	</p>

	<!-- versi 2-->
 	<?php
 		echo "<h1>Halo, Selamat Datang Faul</h1>" // Outputnya adalah "Halo, Selamat Datang Faul"
 	 ?>


<!-- versi Variabel-->
<h1>Halo, Selamat Datang
 		<?php
 			echo $nama; // Outputnya adalah "Halo, Selamat Datang Faul"
 		?>
 	</h1> 	 
 </body>
 </html>

<!------------------------------------------------->

<?php 
//Variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama1 = "Faul Oliber";
echo 'Halo, Nama Saya $nama1'; // Outputnya adalah "Halo, Nama Saya $nama1" > interpolasi

// Operator
// Aritmatika
// + - * / %
// 
echo 1 + 1; // Outputnya adalah "2"
 $x = 10; 
 $y = 20;
 echo $x * $y;// Outputnya adalah "200"

// pengabung string / concatenation / concat
// .
 $nama_depan = "Faul";
 $nama_belakang = "Oliber";
 echo $nama_depan . " " . $nama_belakang;

//assignment
 // =, +=, -=, /=, %=, .=
 $x = 1;
 $x -= 5;
 echo $x;
 $nama = "Faul";
 $nama .= " ";
 $nama .= "Oliber";
 echo $nama;

// Perbandingan
 // <, >, <=, >=, ==
 var_dump(1 == "1");

 //identitas
 //===, !==
 var_dump(1 === "1")

 //logika
 // &&, ||, !
 $x = 30;
 var_dump($x < 20 || $x % 2 == 0);

 ?>