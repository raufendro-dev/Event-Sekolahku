<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
</head>
<body>

<?php 

session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>
<?php
include '../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from users where id='$id'");
        while($d = mysqli_fetch_array($data)){
    
    
	?>
<form action="edit.php" method="POST">
        <h3>Edit Akun Guru</h3>
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <input type="text" name="fullname" value="<?php echo $d['fullname']; ?>">
        <input type="text" name="username" value="<?php echo $d['username']; ?>">
        <input type="password" name="password" value="<?php echo $d['password']; ?>">
        <button type="submit" name="submit">Edit</button>
    </form>
    <?php 
	}
	?>
    </body>
    </html>
