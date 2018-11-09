<?php 
	$servername = "localhost";
	$username = "admin";
	$password = "sony";
	$dbname = "bootcamp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barang</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Barang - Tambah</h3>
		<a href="barang_add.php">Tambah</a> | <a href="barang.php">Lihat</a>
	</div>
	<br>
	<form action="barang_proc.php" name="myform" method="post">
		<table align="center">
			<tr>
				<td>Id</td>
				<td>
					<input type="text" name="id" id="id" size="20">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20">
				</td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>
					<select name="satuan" id="satuan">
						<option value="">Pilih Satuan</option>
						<?php 
							$sql = "SELECT * FROM satuan ORDER BY nama";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['id']."'>".$row['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<select name="kode" id="kode">
						<option value="">Pilih Kode</option>
						<?php
							$sql = "SELECT * FROM mata_uang ORDER BY kode";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['kode']."'>".$row['nama_uang']."</option>";
								}
						?>
					</select>
					<input type="text" name="harga" id="harga" size="20">
				</td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>
					<select name="merk" id="merk">
						<option value="">Pilih Merk</option>
						<?php 
							$sql = "SELECT * FROM merk ORDER BY nama";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['id']."'>".$row['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td>
					<select name="tipe" id="tipe">
						<option value="">Pilih Tipe</option>
						<?php 
							$sql = "SELECT * FROM tipe ORDER BY nama";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['id']."'>".$row['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Supplier</td>
				<td>
					<select name="supplier" id="supplier">
						<option value="">Pilih Supplier</option>
						<?php 
							$sql = "SELECT * FROM supplier ORDER BY nama";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['id']."'>".$row['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_add" id="submit_add" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>