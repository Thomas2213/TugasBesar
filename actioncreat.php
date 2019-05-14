<?php 
	require 'koneksi.php';


	session_start();

	$komentar = $_POST['komentar'];

	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$komentar')");

		if ($tambah>0) {
			echo "<font color= black>Data Berhasil Ditambahkan</font>";
			echo "<br>";
			echo "<font color= black>Klik Untuk Refresh Halaman </font>";
			echo "<a href='tv.php'>disini</a>";
			
		}
		else {
			echo "Data Gagal Ditambahkan";
			echo "<br>";
			echo "Klik ";
			echo "<a href='tv.php'>disini</a>";
		echo " Untuk Mengulang";

		}
	

 ?>