<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form POST</title>
</head>
<body>
	<form action="?action=edit" method="POST">
		<table>
			<label for="">
				<tr>
					<td>Nama :</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="Masukkan NIM"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" placeholder="Masukan Jurusan"></td>
				</tr>
				<tr>
					<td>Kampus</td>
					<td>:</td>
					<td><input type="text" name="kampus" placeholder="Nama Kampus"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="Alamat Email"></td>
				</tr>
			</label>
		</table>
					<button type="submit" name="submit" value="Kirim">Kirim</button>
	</form> <br><br>

	-------------------------------------------------------------------------------- <br>
	<?php  
		if ($_POST) {
			echo "Nama 	: ". $_POST ['nama']; echo "<br>";
			echo "Nim 	: ". $_POST ['nim']; echo "<br>";
			echo "Jurusan 	: ". $_POST ['jurusan']; echo "<br>";
			echo "Kampus	: ". $_POST ['kampus']; echo "<br>";
			echo "Email 	: ". $_POST ['email']; echo "<br>";
		}

	?>
	--------------------------------------------------------------------------------
</body>
</html>