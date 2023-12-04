<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$conn = mysqli_connect('localhost','root','','sql_pro');
	
	session_start();

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['namapengguna'];
	$password = $_POST['katasandi'];
	$level = $_POST['level'];

	$sql = "INSERT INTO pengguna(nama, email, username, password, level) VALUE('$nama', '$email', '$username', '$password', '$level')";
	if ($conn->query($sql) === TRUE) {	
		$_SESSION['pesan'] = "Selamat Datang ".$data['nama'];
		header('location:Login.php');
		// var_dump($data);
	}else{
		echo "Error: ". $sql . "<br>". $conn->error;
	}
?>
</body>
</html>
