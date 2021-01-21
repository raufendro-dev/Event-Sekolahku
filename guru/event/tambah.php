<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$eventname = $_POST['eventname'];
$tanggalawal = $_POST['tanggalawal'];
$tanggalakhir = $_POST['tanggalakhir'];

// menginput data ke database
mysqli_query($koneksi,"insert into event(eventname, tanggalawal, tanggalakhir) values ('$eventname','$tanggalawal','$tanggalakhir')");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>