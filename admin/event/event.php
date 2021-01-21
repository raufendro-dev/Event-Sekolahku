<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
</head>
<body>


<?php 

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<a href = "../index.php">Kembali</a>


<form action="tambah.php" method="POST">
        <h3>Tambah Acara</h3>
        <input type="text" name="eventname" placeholder="eventname">
        <input type="date" name="tanggalawal" placeholder="tanggalawal">
        <input type="date" name="tanggalakhir" placeholder="tanggalakhir">
        <button type="submit" name="submit">Tambah</button>
    </form>
	</br>
	<table border="1">
		<tr>
			<th>No.</th>
			
			<th>Event</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Berakhir</th>
			<th>Edit/Hapus</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$No = 1;
		$data = mysqli_query($koneksi,"select * from event order by tanggalawal asc");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $No++; ?></td>
				
				<td><?php echo $d['eventname']; ?></td>
				<td><?php echo $d['tanggalawal']; ?></td>
				<td><?php echo $d['tanggalakhir']; ?></td>
				<td>
					<a href="edit_event.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    
</body>
</html>