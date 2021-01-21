<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tanggalakhir = $_POST['tanggalakhir'];
$eventname = $_POST['eventname'];
$tanggalawal = $_POST['tanggalawal'];

// menginput data ke database
mysqli_query($koneksi,"update event set eventname='$eventname', tanggalawal='$tanggalawal', tanggalakhir='$tanggalakhir' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:event.php");

?>