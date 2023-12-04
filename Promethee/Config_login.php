<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>

<body>
<?php 
	$conn = mysqli_connect('localhost','root','','sql_pro');
	
	session_start();

	$username = $_POST['namapengguna'];
	$password = $_POST['katasandi'];

	$query = "SELECT * FROM pengguna where username ='$username' AND password='$password'";

	$hasil = mysqli_query($conn, $query);

	if(mysqli_num_rows($hasil)>0){
		$data = mysqli_fetch_assoc($hasil);
		$_SESSION['login'] = true;
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = $data['level'];
		echo "Selamat Datang ".$data['nama'];
		echo "<div align='center'><a href='Promethee_frameset.php' target='Utama' onmouseover='MM_swapImage('Dashboard','','Images/Dashboard2.png',1)' onmouseout='MM_swapImgRestore()'><img src='Images/Dashboard1.png' name='Dashboard' width='184' height='36' border='0' id='Dashboard' /></a></div>";
		// var_dump($data);

	}else{
		header('location:Login.php');
		echo "Username dan Password yang anda masukkan salah";
	}

?>
</body>
</html>
