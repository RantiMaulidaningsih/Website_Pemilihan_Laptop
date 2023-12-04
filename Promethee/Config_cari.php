<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hasil Cari Dataset</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>

<body>
<?php
	$nama_tipe = $_POST['nama'];
	$conn = new mysqli ("localhost", "root", "", "sql_pro");
	if ($conn->connect_error) {
		die("Koneksi gagal: " . $conn->connec_error);
	}
	$sql = "SELECT * FROM laptop WHERE Nama_tipe = '$nama_tipe'";
	$result = $conn->query($sql);
	echo "<style> table, th, td{
		border: 1;}</style>";
	echo "<h2 align='center'>Data kumpulan laptop dan spisifikasi</h2><br><br>";
	if ($result->num_rows >0){
		//Output data daru setiap baris 
		echo"<table width='90%' align='center' border='1pt'>";
		echo"<tr bgcolor='#000'";
		echo"<tr><th>No</th><th>Nama Laptop</th><th>Type Laptop</th><th>Ukuran Layar</th><th>Ram</th><th>Memori</th><th>CPU</th><th>Berat</th><th>Harga</th></tr>"; // TABEL DATABASE
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>" .$row['id']. "</td>";
			echo "<td>" .$row['Merk'] . "</td>";
			echo "<td>" .$row['Nama_tipe'] . "</td>";
			echo "<td>" .$row['Ukuran_layar'] . "</td>";
			echo "<td>" .$row['Ram'] . "</td>";
			echo "<td>" .$row['Memori'] . "</td>";
			echo "<td>" .$row['Cpu'] . "</td>";
			echo "<td>" .$row['Berat']. "</td>";
			echo "<td>" .$row['Harga'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "Tidak ada laptop yang terdaftar.";
	}
	$conn->close();
?>
</body>
</html>
