<?php 
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi,"insert into users(username, password, fullname, level) values ('$username','$password','$fullname', 'guru')");

// mengalihkan halaman kembali ke index.php
header("location:guru.php");

?>