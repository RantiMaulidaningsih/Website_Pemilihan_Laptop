<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Utama</title>
<style type="text/css">
body {
	background-color: #000;
	text-align: center;
	color: #FFF;
}
</style>
</head>

<body>
<table>
 <tr>
      <td width="184" height="38"><a href="Hasil.php" onmouseover="MM_swapImage('cari','','Images/Cari Laptop_2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Cari Laptop_1.png" name="cari" width="184" height="36" border="0" id="cari" /></a>
        <div align="center"></div></td><td width="184"><div align="center"><a href="Utama.php" target="Utama" onmouseover="MM_swapImage('Dashboard','','Images/Dashboard2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Dashboard1.png" name="Dashboard" width="184" height="36" border="0" id="Dashboard" target= "Utama"/></a></div></td>
      <td width="184"><div align="center"><a href="Dataset.php" onmouseover="MM_swapImage('Dataset_Laptop','','Images/Dataset2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Dataset1.png" name="Dataset_Laptop" width="184" height="36" border="0" id="Dataset_Laptop" /></a></div></td>
      <td width="184"><div align="center"><a href="User.php" onmouseover="MM_swapImage('User','','Images/User2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/User1.png" name="User" width="184" height="36" border="0" id="User" /></a></div></td>
      <td width="184"><div align="center"><a href="Edit_Data.php" onmouseover="MM_swapImage('Edit','','Images/Edit_Dataset2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Edit_Dataset1.png" name="Edit" width="184" height="36" border="0" id="Edit" /></a></div></td>
      <td width="184"><div align="center"><a href="tambah_data.php" onmouseover="MM_swapImage('tambah_data','','Images/Tambah Data Laptop_2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Tambah Data Laptop_1.png" name="tambah_data" width="184" height="36" border="0" id="tambah_data" /></a></div></td>
      <td width="184"><div align="center"><a href="Hapus_Data.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('hapus','','Images/Hapus Laptop_2.png',1)"><img src="Images/Hapus Laptop_1.png" name="hapus" width="184" height="36" border="0" id="hapus" /></a></div></td>
      <td width="184"><div align="center"><a href="Logout.php" onmouseover="MM_swapImage('logout','','Images/Log_Out2.png',1)" onmouseout="MM_swapImgRestore()"><img src="Images/Log_Out1.png" name="logout" width="184" height="36" border="0" id="logout" /></a></div></td>
    </tr>
    </table>
<form action="Pilih.php" method="post" name="form1" target="Utama" id="form1">
  <table width="426" height="172" border="0" align="center">
  <caption>
      Berikan Bobot kriteria sesuai preserensi anda, semakin besar nilai semakin penting bagi anda kriteria tersebut dan kriteria terpenting diberi bobot nilai yang terbesar dan berbeda dari yang lain<br />
      <br />
    </caption>
    <tr>
      <td width="201">Ukuran Layar</td>
      <td width="215"><label for="Ukuran_layar"></label>
        <div align="left">
          <input type="number" name="ukuran_layar" id="ukuran_layar" step='0.1'/>
      </div></td>
    </tr>
    <tr>
      <td>Ram</td>
      <td><label for="Ram"></label>
        <div align="left">
          <input type="number" name="ram" id="ram" step = '0.1'/>
      </div></td>
    </tr>
    <tr>
      <td>Memori</td>
      <td><label for="memori"></label>
        <div align="left">
          <input type="number" name="memori" id="memori" step = '0.1' />
      </div></td>
    </tr>
    <tr>
      <td>Cpu</td>
      <td><label for="cpu"></label>
        <div align="left">
          <input type="number" name="cpu" id="cpu" step = '0.1'/>
      </div></td>
    </tr>
    <tr>
      <td>Berat</td>
      <td><label for="berat"></label>
        <div align="left">
          <input type="number" name="berat" id="berat" step = '0.1' />
      </div></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label for="Harga"></label>
        <div align="left">
          <input type="number" name="harga" id="harga" step = '0.1' />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="merk"></label>        <input type="submit" name="Pilih" id="Pilih" value="Hitung Promethee" />      </td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
</body>
</html>