<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
</head>
<body>
<a href="event/tambah_event.php">Tambah Event</a>

<?php 

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<table border="1">
		<tr>
			<th>No</th>
			
			<th>Event</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Berakhir</th>
			<th>Edit/Hapus</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from event order by tanggalawal asc");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $d['eventname']; ?></td>
				<td><?php echo $d['tanggalawal']; ?></td>
				<td><?php echo $d['tanggalakhir']; ?></td>
				<td>
					<a href="event/edit_event.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="event/hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <a href = "logout.php">Keluar</a>
</body>
</html>