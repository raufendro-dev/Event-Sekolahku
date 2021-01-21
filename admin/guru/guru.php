<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
<a href="../index.php">Kembali</a>

<?php 

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<form action="buat.php" method="POST">
        <h3>Buat Akun Guru</h3>
        <input type="text" name="fullname" placeholder="fullname">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">Buat</button>
    </form>

	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			
			<th>Nama</th>
			<th>username</th>
			<th>password</th>
			<th>Edit/Hapus</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from users where level='guru'");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $d['fullname']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="edit_guru.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>