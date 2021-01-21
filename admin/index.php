<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
<?php 

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<h3>Selamat datang</h3>
<a href="guru/guru.php">Data Guru</a>
</br>
<a href="siswa/siswa.php">Data Siswa</a>
</br>
<a href = "logout.php">Keluar</a>