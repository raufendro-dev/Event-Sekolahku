<!DOCTYPE html>
<html>
<head>
	<title>Edit Event</title>
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
        $data = mysqli_query($koneksi,"select * from event where id='$id'");
        while($d = mysqli_fetch_array($data)){
    
    
	?>
<form action="edit.php" method="POST">
        <h3>Edit Event</h3>
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <input type="text" name="eventname" value="<?php echo $d['eventname']; ?>">
        <input type="text" name="tanggalawal" value="<?php echo $d['tanggalawal']; ?>">
        <input type="tanggalakhir" name="tanggalakhir" value="<?php echo $d['tanggalakhir']; ?>">
        <button type="submit" name="submit">Edit</button>
    </form>
    <?php 
	}
	?>
    </body>
    </html>
