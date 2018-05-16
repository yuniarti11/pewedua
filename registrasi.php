<!DOCTYPE html>
<html>
<head>
	<title> Form Registrasi </title>
</head>
<body>
	<?php
	$kabupaten = [
					[
						"id"=>1,
						"nama_kab"=>"Pontianak"
					],
					[
						"id"=>2,
						"nama_kab"=>"Kubu Raya"
					],
					[
						"id"=>3,
						"nama_kab"=>"Mempawah"
					],
					[
						"id"=>4,
						"nama_kab"=>"Singkawang"
					],
					[
						"id"=>5,
						"nama_kab"=>"Sambas"
					],

				]
			?>

	<center><h1>REGISTRASI</h1></center>
	<form method="POST" action="proses.php">
		<center>
		<table>
			<tr>
				<td>Username :</td>
				<td>
					<input type="text" name="username" placeholder="username">
				</td>
			</tr>
			<tr>
				<td>Password :</td>
				<td>
					<input type="password" name="password" placeholder="your password">
				</td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td>
					<input type="text" name="name" placeholder="your name">
				</td>
				
			</tr>
			<tr>
				<td>No.Hp :</td>
				<td>
					<input type="number" name="telepon" placeholder="your number">
				</td>
				
			</tr>
			<tr>
				<td>Alamat :</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>

			</tr>
			<tr>
				<td>kabupaten :</td>
				<td>
					<select name="kabupaten">
						<?php foreach ($kabupaten as $kab): ?>	
						<option value="<?php echo $kab['id'] ?>"> <?php echo $kab['nama_kab']; ?></option>

					
						
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="Jenis Kelamin">Laki-laki
					<input type="radio" name="Jenis Kelamin">Perempuan
				</td>

			</tr>
			<tr>
				<td>Prodi Pilihan :</td>
				<td>
					<option>
						<input type="checkbox" name="Prodi">Sistem Informasi <br>
						<input type="checkbox" name="Prodi">Sistem Komputer <br>
						<input type="checkbox" name="Prodi">Matematika <br>

					</option>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>

		</table></center>
	</form>


</body>
</html>