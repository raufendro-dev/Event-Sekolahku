<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi,"update users set username='$username', password='$password', fullname='$fullname', level='guru' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:guru.php");

?>