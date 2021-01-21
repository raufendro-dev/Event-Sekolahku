<!doctype html>
<html>
    <head>
        <title>Event Sekolahku</title>
    </head>
    <body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login terlebih dahulu";
		}
	}
	?>
    <form action="cek_login.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">Login</button>
    </form>
    </body>
</html>