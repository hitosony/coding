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
/*else 
	echo "Connection Success";*/

$id = $_GET['id'];
$sql = "SELECT * FROM satuan WHERE id = '$id'";
$result = $conn->query($sql);
$dat = $result->fetch_array(MYSQLI_BOTH);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Satuan</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Satuan - Detil</h3>
		<a href="satuan_add.php">Tambah</a> | <a href="satuan.php">Lihat</a>
	</div>

	<form action="satuan_proc.php" name="myform" method="post">
		<table width="50%" align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="id" id="id" size="5" value="<?= $dat['id']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $dat['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_edit" id="submit_edit" value="Simpan">
					<input type="submit" name="submit_delete" id="submit_delete" value="Hapus">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>