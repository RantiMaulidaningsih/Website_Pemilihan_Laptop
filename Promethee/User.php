<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>
<table>
 <tr>
      <td width="76"><a href="Hasil.php" onmouseover="MM_swapImage('cari','','Images/Cari Laptop_2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Cari Laptop_1.png" name="cari" width="184" height="36" border="0" id="cari" /></a>
        <div align="center"></div></td><td width="76"><div align="center"><a href="Utama.php" target="Utama" onmouseover="MM_swapImage('Dashboard','','Images/Dashboard2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Dashboard1.png" name="Dashboard" width="184" height="36" border="0" id="Dashboard" target= "Utama"/></a></div></td>
      <td width="105"><div align="center"><a href="Dataset.php" onmouseover="MM_swapImage('Dataset_Laptop','','Images/Dataset2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Dataset1.png" name="Dataset_Laptop" width="184" height="36" border="0" id="Dataset_Laptop" /></a></div></td>
      <td width="134"><div align="center"><a href="User.php" onmouseover="MM_swapImage('User','','Images/User2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/User1.png" name="User" width="184" height="36" border="0" id="User" /></a></div></td>
      <td width="172"><div align="center"><a href="Edit_Data.php" onmouseover="MM_swapImage('Edit','','Images/Edit_Dataset2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Edit_Dataset1.png" name="Edit" width="184" height="36" border="0" id="Edit" /></a></div></td>
      <td width="105"><div align="center"><a href="tambah_data.php" onmouseover="MM_swapImage('tambah_data','','Images/Tambah Data Laptop_2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Tambah Data Laptop_1.png" name="tambah_data" width="184" height="36" border="0" id="tambah_data" /></a></div></td>
      <td width="194"><div align="center"><a href="Hapus_Data.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('hapus','','Images/Hapus Laptop_2.png',1)"><img src="Images/Hapus Laptop_1.png" name="hapus" width="184" height="36" border="0" id="hapus" /></a></div></td>
      <td width="152"><div align="center"><a href="Logout.php" onmouseover="MM_swapImage('logout','','Images/Log_Out2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Log_Out1.png" name="logout" width="184" height="36" border="0" id="logout" /></a></div></td>
    </tr>
    </table>

<body>
</body>
</html>
<?php
	$conn = new mysqli ("localhost", "root", "", "sql_pro");
	if ($conn->connect_error) {
		die("Koneksi gagal: " . $conn->connec_error);
	}
	$sql = "SELECT * FROM pengguna";
	$result = $conn->query($sql);
	echo "<style> table, th, td{
		border: 1;}</style>";
	echo "<h2 align='center'>Data User</h2><br><br>";
	if ($result->num_rows >0){
		//Output data daru setiap baris 
		echo"<table width='90%' align='center' border='1pt'>";
		echo"<tr bgcolor='#000'";
		echo"<tr><th>Username</th><th>Email</th><th>Nama</th><th>Level</th></tr>"; // TABEL DATABASE
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>" .$row['username'] . "</td>";
			echo "<td>" .$row['email'] . "</td>";
			echo "<td>" .$row['nama'] . "</td>";
			echo "<td>" .$row['level'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "Tidak ada pengguna yang terdaftar.";
	}
	$conn->close();
?>