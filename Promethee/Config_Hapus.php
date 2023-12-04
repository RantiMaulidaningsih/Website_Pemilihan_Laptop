<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Configurasi Hapus Data</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>

<body>
<?php
	$tipe =$_POST['nama'];
	
	$conn = new mysqli("localhost", "root", "", "sql_pro");
	
	if ($conn-> connect_error){
		die("Koneksi gagal: . $conn->connect_error");
	}
	$sql = "DELETE FROM laptop WHERE Nama_tipe='$tipe'";
if ($conn->query($sql) === TRUE) {
	echo "Data dengan nama tipe laptop $tipe telah berhasil dihapus" ;
}else{
	echo "Error: ". $sql . "<br>". $conn->error;
}
	// Tutup Koneksi 
	$conn->close();
?>
</body>
</html>
