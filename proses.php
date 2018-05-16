<!DOCTYPE html>
<html>
<head>
	<title>Proses Registrasi</title>
</head>
<body>
	<center><h2>Selamat!</h2></center>
	<center><h3>Anda Terdaftar Dengan Identitas</h3></center>

	<center>	
	<table>
		<tr>
			<td>Nama </td>
			<td>:</td>
			<td>
				<?= $_POST['name'] ?>
			</td>			
		</tr>
		<tr>
			<td>Username </td>
			<td>:</td>
			<td>
				<?= $_POST['username'] ?>
			</td>			
		</tr>
		<tr>
			<td>No.Hp </td>
			<td>:</td>
			<td>
				<?= $_POST['telepon'] ?>
			</td>			
		</tr>
		<tr>
			<td>Alamat </td>
			<td>:</td>
			<td>
				<?= $_POST['alamat'] ?>
			</td>			
		</tr>
		
	</table></center>

</body>
</html>

