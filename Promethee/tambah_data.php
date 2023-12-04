<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tambah data</title>
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
<form action="Config_tambah.php" method="post" name="form1" target="Utama" id="form1">
  <h1 align="center">Tambah Dataset laptop dengan kriteria pengisian sebagai berikut </h1>
  <table width="438" border="1" align="center">
    <tr>
      <td>Kriteria</td>
      <td>Keterangan Nilai</td>
      <td>Inputan yang dimasukkan dalam form</td>
    </tr>
    <tr>
      <td>Ukuran layar</td>
      <td>Desimal</td>
      <td>Desimal dengan titik (ukuran dalam inches)</td>
    </tr>
    <tr>
      <td>Ram</td>
      <td>Integer</td>
      <td>Ukuran dalam GB</td>
    </tr>
    <tr>
      <td rowspan="3">Memori</td>
      <td>HDD</td>
      <td>1</td>
    </tr>
    <tr>
      <td>SSD</td>
      <td>2</td>
    </tr>
    <tr>
      <td>SSHD</td>
      <td>3</td>
    </tr>
    <tr>
      <td rowspan="3">CPU</td>
      <td>Intel Core i3</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Intel Core i5</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Intel Core i7</td>
      <td>3</td>
    </tr>
    <tr>
      <td>Berat</td>
      <td>Desimal</td>
      <td>Desimal dengan titik (ukuran dalam kg)</td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>Desimal</td>
      <td>ditulis tanpa titik (dalam mata uang rupiah)</td>
    </tr>
  </table>
  <table width="498" border="0" align="center">
    <caption>
      Tambah Laptop
    </caption>
    <tr>
      <td width="191">Merk Laptop</td>
      <td width="10">:</td>
      <td width="283"><label for="merk"></label>
      <select name="merk" id="merk">
          <option value="Asus">Asus</option>
          <option value="Dell">Dell</option>
          <option value="Lenovo">Lenovo</option>
          <option value="MacBook">MacBook</option>
          <option value="HP">HP</option>
          <option value="Acer">Acer</option>
      </select>
    </tr>
    <tr>
      <td>Jenis laptop</td>
      <td>:</td>
      <td><label for="nama_tipe"></label>
      <input type="text" name="nama_tipe" id="nama_tipe" /></td>
    </tr>
    <tr>
      <td>Ukuran layar</td>
      <td>:</td>
      <td><label for="ukuran_layar"></label>
      <input type="number" step="0.1" name="ukuran_layar" id="ukuran_layar" /></td>
    </tr>
    <tr>
      <td>Ram</td>
      <td>:</td>
      <td><label for="ram"></label>
        <select name="ram" id="ram">
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="8">8</option>
          <option value="16">16</option>
          <option value="32">32</option>
      </select></td>
    </tr>
    <tr>
      <td>Memori</td>
      <td>:</td>
      <td><label for="memori"></label>
        <select name="memori" id="memori">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select></td>
    </tr>
    <tr>
      <td>Cpu</td>
      <td>:</td>
      <td><select name="cpu" id="cpu">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select></td>
    </tr>
    <tr>
      <td>Berat</td>
      <td>:</td>
      <td><label for="berat"></label>
      <input type="number" step="0.01" name="berat" id="berat" /></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><label for="harga"></label>
      <input type="number" step="0.01" name="harga" id="harga" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="tambah" id="tambah" value="Tambah" /></td>
    </tr>
  </table>
  <p>&nbsp; </p>
</form>
</body>
</html>