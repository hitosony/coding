<?php
$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*else 
	echo "Connection Success";*/

$sql = "SELECT * FROM pelanggan ORDER BY no_pelanggan";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PELANGGAN</title>
</head>
<body>

	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Pelanggan</th>
				<th>Nama Pelanggan</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php
				if ($result->num_rows > 0) {
					$i = 0;
					while($row = $result->fetch_assoc()){
						$i++;
						echo "<tr>
								<td>$i</td>
								<td>".$row['no_pelanggan']."</td>
								<td>".$row['nama']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>