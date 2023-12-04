<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proses Edit database laptop</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
<?php
	$nama = $_POST['nama'];
	$conn = new mysqli("localhost", "root", "", "sql_pro");
	
	if ($conn-> connect_error){
		die("Koneksi gagal: . $conn->connect_error");
	}
	$sql = "SELECT * FROM laptop WHERE Nama_tipe='$nama'";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc() ;
}else{
	echo "Error: ". $sql . "<br>". $conn->error;
}
	
	// Tutup Koneksi 
	$conn->close();
?>
</head>

<body>
<form action="Config_edit.php" method="post" name="form1" target="Utama" id="form1">
  <p>Edit Dataset laptop dengan kriteria pengisian sebagai berikut 
  </p>
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
  <table width="365" border="0" align="center">
    <caption>
      Tambah Laptop
    </caption>
    <tr>
      <td width="49">Merk Laptop</td>
      <td width="3">:</td>
      <td width="299"><label for="merk"></label>
      <select name="merk" id="merk">
          <option value="Asus">Asus</option>
          <option value="Dell">Dell</option>
          <option value="Lenovo">Lenovo</option>
          <option value="MacBook">MacBook</option>
          <option value="HP">HP</option>
          <option value="Acer">Acer</option>
      </select>    </tr>
    <tr>
      <td>Jenis laptop</td>
      <td>:</td>
      <td><label for="nama_tipe"></label>
      <input type="text" name="nama_tipe" id="nama_tipe" value="<?php echo $row['Nama_tipe'];?>"/></td>
    </tr>
    <tr>
      <td>Ukuran layar</td>
      <td>:</td>
      <td><label for="ukuran_layar"></label>
      <input type="number" step="0.1" name="ukuran_layar" id="ukuran_layar" value="<?php echo $row['Ukuran_layar'];?>"/></td>
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
      <input type="number" name="berat" id="berat" value="<?php echo $row['Berat'];?>"/></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><label for="harga"></label>
      <input type="number" name="harga" id="harga" value="<?php echo $row['Harga'];?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="tambah" id="tambah" value="Edit" /></td>
    </tr>
  </table>
  <p>&nbsp; </p>
</form>
</body>
</html>