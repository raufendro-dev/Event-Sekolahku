<!DOCTYPE html>
<html>
<head>
	<title>Tambah Event</title>
</head>
<body>
<a href="../index.php">Kembali</a>

<?php 

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<form action="tambah.php" method="POST">
        <h3>Tambah Acara</h3>
        <input type="text" name="eventname" placeholder="eventname">
        <input type="date" name="tanggalawal" placeholder="tanggalawal">
        <input type="date" name="tanggalakhir" placeholder="tanggalakhir">
        <button type="submit" name="submit">Tambah</button>
    </form>