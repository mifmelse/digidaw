<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Hahahahahahaha</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		FORMULIR PENDAFTARAN ONLINE
	</div>
	<div class="content">
		<div class="box-form">
			<h2 class="tit">SILAHKAN ISI FORM PENDAFTARAN DIBAWAH INI</h2> <br><br>
			<form action="" method="POST">
				Nama Lengkap <br>
				<input type="text" name="nama" required> <br><br>
				Email <br>
				<input type="text" name="email" required> <br><br>
				Telepon <br>
				<input type="text" name="phone" required> <br><br>
				Alamat <br>
				<textarea name="alamat" rows="4" cols="75"></textarea> <br><br>
				Jenis Kelamin <br>
				<input type="radio" name="gender" value="1" required> Pria
				<input type="radio" name="gender" value="2" required> Wanita <br><br>
				<input type="submit" name="kirim" value="Daftar">
			</form>
			<?php
			include 'koneksi.php';
			if(isset($_POST['kirim'])){
				if(!is_numeric($_POST['phone'])){
					echo 'nomor telephone harus angka!';
				}else{

				$insert = mysqli_query($conn, "insert into tb_pendaftaran values (null, '".ucwords($_POST['nama'])."', '".$_POST['email']."','".$_POST['phone']."', '".ucwords($_POST['alamat'])."', '".$_POST['gender']."')");

				if($insert){
					echo 'berhasil daftar';
				}else{
					echo 'gagal daftar';
				}
				}
			}
			?>
		</div>
	</div>
	<div class="footer">
		Copyright &copy; Miftahul 2022.
	</div>
</body>
</html>