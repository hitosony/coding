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

$kode = $_POST['kode'];
$nama = $_POST['nama'];

if(isset($_POST['submit_add'])){
	$sql = "INSERT INTO mata_uang
			(kode,nama_uang) VALUES
			('$kode','$nama')";
	if (!$conn->query($sql))
		die('Simpan Mata Uang Gagal');
	else{
		header("Location: mata_uang.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$sql = "UPDATE mata_uang
			SET kode='$kode', nama_uang='$nama'
			WHERE kode='$kode';";
	if (!$conn->query($sql))
		die('Edit Mata Uang Gagal');
	else{
		header("Location: mata_uang.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM mata_uang
			WHERE kode='$kode';";
	if (!$conn->query($sql))
		die('Hapus Mata Uang Gagal');
	else{
		header("Location: mata_uang.php");
		exit();
	}
}

?>