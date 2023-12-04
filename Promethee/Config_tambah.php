<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Configurasi Tambah</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>

<body>
<?php

	$merk = $_POST['merk'];
	$tipe = $_POST['nama_tipe'];
	$layar = $_POST['ukuran_layar'];
	$ram = $_POST['ram'];
	$memori = $_POST['memori'];
	$cpu = $_POST['cpu'];
	$berat = $_POST['berat'];
	$harga = $_POST['harga'];
	
	$conn = new mysqli("localhost", "root", "", "sql_pro");
	
	if ($conn-> connect_error){
		die("Koneksi gagal: . $conn->connect_error");
	}
	$sql = "INSERT INTO laptop(Merk, Nama_tipe, Ukuran_layar, Ram, Memori, Cpu, Berat, Harga) VALUE ('$merk','$tipe','$layar','$ram','$memori','$cpu','$berat','$harga')";
	
if ($conn->query($sql) === TRUE) {
	echo "Data Laptop berhasil ditambahkan" ;
}else{
	echo "Error: ". $sql . "<br>". $conn->error;
}
	
	// Tutup Koneksi 
	$conn->close();
?>
</body>
</html>
