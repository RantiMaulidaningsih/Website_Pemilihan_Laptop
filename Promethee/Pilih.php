<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preferensi anda</title>
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
	$selectedMerk = $_POST['merk'];
	$bobot_layar = $_POST['ukuran_layar'];
	$bobot_ram = $_POST['ram'];
	$bobot_memori = $_POST['memori'];
	$bobot_cpu = $_POST['cpu'];
	$bobot_berat = $_POST['berat'];
	$bobot_harga = $_POST['harga'];
	
	function hitungParameter ($bobot_layar, $bobot_ram, $bobot_memori, $bobot_cpu, $bobot_berat, $bobot_harga){
	$conn = new mysqli ("localhost", "root", "", "sql_pro");
	if ($conn->connect_error) {
		die("Koneksi gagal: " . $conn->connec_error);
	}
	$sql = "SELECT * FROM laptop ORDER BY Harga ASC LIMIT 3";
	$result = $conn->query($sql);
	$i = 0;
	if ($result->num_rows >0){
		echo"<table width='90%' align='center' border='1pt'>";
		echo"<tr bgcolor='#000'";
		echo"<tr><th>No</th><th>Nama Laptop</th><th>Type Laptop</th><th>Nilai kriteria Ukuran Layar</th><th>Nilai kriteria Ram</th><th>Nilai kriteria Memori</th><th>Nilai kriteria CPU</th><th>Nilai kriteria Berat</th><th>Nilai kriteria Harga</th></tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>" .$row['id']. "</td>";
			echo "<td>" .$row['Merk'] . "</td>";
			echo "<td>" .$row['Nama_tipe'] . "</td>";
			// Make sure to access the correct keys in the $row array
            $layar = $row['Ukuran_layar'];
            $ram = $row['Ram'];
            $memori = $row['Memori'];
            $cpu = $row['Cpu'];
            $berat = $row['Berat'];
            $harga = $row['Harga'];
			$nilaiParameter_layar[$i] = $bobot_layar * $layar ;
			$nilaiParameter_ram[$i] = $bobot_ram * $ram ;
			$nilaiParameter_memori[$i] = $bobot_memori * $memori ;
			$nilaiParameter_cpu[$i] = $bobot_cpu * $cpu ;
			$nilaiParameter_berat[$i] = $bobot_berat * $berat ;
			$nilaiParameter_harga[$i] = $bobot_harga * $harga ;
			//tampilkan hasil kali tiap kolom dari dua array diatas
			echo "<td>" . $nilaiParameter_layar[$i] . "</td>";
			echo "<td>" . $nilaiParameter_ram[$i] . "</td>";
			echo "<td>" . $nilaiParameter_memori[$i] . "</td>";
			echo "<td>" . $nilaiParameter_cpu[$i] . "</td>";
			echo "<td>" . $nilaiParameter_berat[$i] . "</td>";
			echo "<td>" . $nilaiParameter_harga[$i] . "</td>";
			echo "</tr>";
			$i++; 
			}
			echo "</table>";
		if($i==3){
			$nilaiPreferensi_A1_A2[0] = ($nilaiParameter_layar[0]- $nilaiParameter_layar[1])/10;
			$nilaiPreferensi_A1_A2[1] = ($nilaiParameter_ram[0]- $nilaiParameter_ram[1])/4;
			$nilaiPreferensi_A1_A2[2] = ($nilaiParameter_memori[0]- $nilaiParameter_memori[1])/1;
			$nilaiPreferensi_A1_A2[3] = ($nilaiParameter_cpu[0]- $nilaiParameter_cpu[1])/1;
			$nilaiPreferensi_A1_A2[4] = ($nilaiParameter_berat[0]- $nilaiParameter_berat[1])/1;
			$nilaiPreferensi_A1_A2[5] = ($nilaiParameter_harga[0]- $nilaiParameter_harga[1])/2000000;
			$totalPreferensi_A1_A2 = $nilaiPreferensi_A1_A2[0]+$nilaiPreferensi_A1_A2[1]+$nilaiPreferensi_A1_A2[2]+$nilaiPreferensi_A1_A2[3]+$nilaiPreferensi_A1_A2[4]+$nilaiPreferensi_A1_A2[5];
			$nilaiPreferensi_A2_A1[0] = ($nilaiParameter_layar[1]- $nilaiParameter_layar[0])/10;
			$nilaiPreferensi_A2_A1[1] = ($nilaiParameter_ram[1]- $nilaiParameter_ram[0])/4;
			$nilaiPreferensi_A2_A1[2] = ($nilaiParameter_memori[1]- $nilaiParameter_memori[0])/1;
			$nilaiPreferensi_A2_A1[3] = ($nilaiParameter_cpu[1]- $nilaiParameter_cpu[0])/1;
			$nilaiPreferensi_A2_A1[4] = ($nilaiParameter_berat[1]- $nilaiParameter_berat[0])/1;
			$nilaiPreferensi_A2_A1[5] = ($nilaiParameter_harga[1]- $nilaiParameter_harga[0])/2000000;
			$totalPreferensi_A2_A1 = $nilaiPreferensi_A2_A1[0]+$nilaiPreferensi_A2_A1[1]+$nilaiPreferensi_A2_A1[2]+$nilaiPreferensi_A2_A1[3]+$nilaiPreferensi_A2_A1[4]+$nilaiPreferensi_A2_A1[5];
			$nilaiPreferensi_A1_A3[0] = ($nilaiParameter_layar[0]- $nilaiParameter_layar[2])/10;
			$nilaiPreferensi_A1_A3[1] = ($nilaiParameter_ram[0]- $nilaiParameter_ram[2])/4;
			$nilaiPreferensi_A1_A3[2] = ($nilaiParameter_memori[0]- $nilaiParameter_memori[2])/1;
			$nilaiPreferensi_A1_A3[3] = ($nilaiParameter_cpu[0]- $nilaiParameter_cpu[2])/1;
			$nilaiPreferensi_A1_A3[4] = ($nilaiParameter_berat[0]- $nilaiParameter_berat[2])/1;
			$nilaiPreferensi_A1_A3[5] = ($nilaiParameter_harga[0]- $nilaiParameter_harga[2])/2000000;
			$totalPreferensi_A1_A3 = $nilaiPreferensi_A1_A3[0]+$nilaiPreferensi_A1_A3[1]+$nilaiPreferensi_A1_A3[2]+$nilaiPreferensi_A1_A3[3]+$nilaiPreferensi_A1_A3[4]+$nilaiPreferensi_A1_A3[5];
			$nilaiPreferensi_A3_A1[0] = ($nilaiParameter_layar[2]- $nilaiParameter_layar[0])/10;
			$nilaiPreferensi_A3_A1[1] = ($nilaiParameter_ram[2]- $nilaiParameter_ram[0])/4;
			$nilaiPreferensi_A3_A1[2] = ($nilaiParameter_memori[2]- $nilaiParameter_memori[0])/1;
			$nilaiPreferensi_A3_A1[3] = ($nilaiParameter_cpu[2]- $nilaiParameter_cpu[0])/1;
			$nilaiPreferensi_A3_A1[4] = ($nilaiParameter_berat[2]- $nilaiParameter_berat[0])/1;
			$nilaiPreferensi_A3_A1[5] = ($nilaiParameter_harga[2]- $nilaiParameter_harga[0])/2000000;
			$totalPreferensi_A3_A1 = $nilaiPreferensi_A3_A1[0]+$nilaiPreferensi_A3_A1[1]+$nilaiPreferensi_A3_A1[2]+$nilaiPreferensi_A3_A1[3]+$nilaiPreferensi_A3_A1[4]+$nilaiPreferensi_A3_A1[5];
			$nilaiPreferensi_A2_A3[0] = ($nilaiParameter_layar[1]- $nilaiParameter_layar[2])/10;
			$nilaiPreferensi_A2_A3[1] = ($nilaiParameter_ram[1]- $nilaiParameter_ram[2])/4;
			$nilaiPreferensi_A2_A3[2] = ($nilaiParameter_memori[1]- $nilaiParameter_memori[2])/1;
			$nilaiPreferensi_A2_A3[3] = ($nilaiParameter_cpu[1]- $nilaiParameter_cpu[2])/1;
			$nilaiPreferensi_A2_A3[4] = ($nilaiParameter_berat[1]- $nilaiParameter_berat[2])/1;
			$nilaiPreferensi_A2_A3[5] = ($nilaiParameter_harga[1]- $nilaiParameter_harga[2])/2000000;
			$totalPreferensi_A2_A3 = $nilaiPreferensi_A2_A3[0]+ $nilaiPreferensi_A2_A3[1]+$nilaiPreferensi_A2_A3[2]+$nilaiPreferensi_A2_A3[3]+$nilaiPreferensi_A2_A3[4]+$nilaiPreferensi_A2_A3[5];
			$nilaiPreferensi_A3_A2[0] = ($nilaiParameter_layar[2]- $nilaiParameter_layar[1])/10;
			$nilaiPreferensi_A3_A2[1] = ($nilaiParameter_ram[2]- $nilaiParameter_ram[1])/4;
			$nilaiPreferensi_A3_A2[2] = ($nilaiParameter_memori[2]- $nilaiParameter_memori[1])/1;
			$nilaiPreferensi_A3_A2[3] = ($nilaiParameter_cpu[2]- $nilaiParameter_cpu[1])/1;
			$nilaiPreferensi_A3_A2[4] = ($nilaiParameter_berat[2]- $nilaiParameter_berat[1])/1;
			$nilaiPreferensi_A3_A2[5] = ($nilaiParameter_harga[2]- $nilaiParameter_harga[1])/2000000;
			$totalPreferensi_A3_A2 = $nilaiPreferensi_A3_A2[0]+$nilaiPreferensi_A3_A2[1]+$nilaiPreferensi_A3_A2[2]+$nilaiPreferensi_A3_A2[3]+$nilaiPreferensi_A3_A2[4]+$nilaiPreferensi_A3_A2[5];
			echo "Menghitung nilai preferensi";
			echo"<table width='90%' align='center' border='1pt'>";
			echo"<tr bgcolor='#000'";
			echo"<tr><th>Kode Laptop Alternatif</th><th>A1</th><th>A2</th><th>A3</th></tr>";
			echo "<tr>";
			echo "<td>A1</td>";
			echo "<td>0</td>";
			echo "<td>" .$totalPreferensi_A1_A2. "</td>";
			echo "<td>" .$totalPreferensi_A1_A3. "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>A2</td>";
			echo "<td>" .$totalPreferensi_A2_A1. "</td>";
			echo "<td>0</td>";
			echo "<td>" .$totalPreferensi_A2_A3. "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>A3</td>";
			echo "<td>" .$totalPreferensi_A3_A1. "</td>";
			echo "<td>" .$totalPreferensi_A3_A2. "</td>";
			echo "<td>0</td>";
			echo "</tr>";
			echo "</table>";
			$indexPreferensi_A1_A2 = $totalPreferensi_A1_A2/6;
			$indexPreferensi_A1_A3 = $totalPreferensi_A1_A3/6;
			$indexPreferensi_A2_A1 = $totalPreferensi_A2_A1/6;
			$indexPreferensi_A2_A3 = $totalPreferensi_A2_A3/6;
			$indexPreferensi_A3_A1 = $totalPreferensi_A3_A1/6;
			$indexPreferensi_A3_A2 = $totalPreferensi_A3_A2/6;
			echo "Menghitung index preferensi multikriteria";
			echo "<table width='90%' align='center' border='1pt'>";
			echo"<tr bgcolor='#000'";
			echo"<tr><th>Kode Laptop Alternatif</th><th>A1</th><th>A2</th><th>A3</th></tr>";
			echo "<tr>";
			echo "<td>A1</td>";
			echo "<td>0</td>";
			echo "<td>" .$indexPreferensi_A1_A2. "</td>";
			echo "<td>" .$indexPreferensi_A1_A3. "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>A2</td>";
			echo "<td>" .$indexPreferensi_A2_A1. "</td>";
			echo "<td>0</td>";
			echo "<td>" .$indexPreferensi_A2_A3. "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>A3</td>";
			echo "<td>" .$indexPreferensi_A3_A1. "</td>";
			echo "<td>" .$indexPreferensi_A3_A2. "</td>";
			echo "<td>0</td>";
			echo "</tr>";
			echo "</table>";
			$leaving_flow_A1 = ($indexPreferensi_A1_A2 + $indexPreferensi_A1_A3)/2;
			$leaving_flow_A2 = ($indexPreferensi_A2_A1+$indexPreferensi_A1_A3)/2;
			$leaving_flow_A3 = ($indexPreferensi_A3_A1+$indexPreferensi_A3_A2)/2;
			$entering_flow_A1 = ($indexPreferensi_A1_A2 + $indexPreferensi_A1_A3)*(-1)/2;
			$entering_flow_A2 = ($indexPreferensi_A2_A1+$indexPreferensi_A1_A3)*(-1)/2;
			$entering_flow_A3 = ($indexPreferensi_A3_A1+$indexPreferensi_A3_A2)*(-1)/2;
			$net_flow_A1 = $leaving_flow_A1 - $entering_flow_A1;
			$net_flow_A2 = $leaving_flow_A2 - $entering_flow_A2;
			$net_flow_A3 = $leaving_flow_A3 - $entering_flow_A3;
			$leaving_flow = array($leaving_flow_A1, $leaving_flow_A2, $leaving_flow_A3);
			$entering_flow = array($entering_flow_A1, $entering_flow_A2, $entering_flow_A3);
			$nilai = array($net_flow_A1, $net_flow_A2, $net_flow_A3);
			$peringkat = array(1,1,1);
			for($i=0; $i<3; $i++){
				for($j=0; $j<3; $j++){
					if ($nilai[$i] < $nilai[$j]){
						$peringkat[$i]++;
						}
					}
				}
			echo "Rating Laptop Final berdasarkan leaving flow, entering flow, dan net flow";
			echo "<table width='90%' align='center' border='1pt'>";
			echo"<tr bgcolor='#000'";
			echo"<tr><th>Kode Laptop Alternatif</th><th>Leaving Flow</th><th>Entering Flow</th><th>Net Flow</th><th>Rangking </th></tr>";
			for($i=0; $i<3;$i++){
				$k = $i +1;
				echo "<tr>";
				echo "<td>A" .$k. "</td>";
				echo "<td>" .$leaving_flow[$i] ."</td>";
				echo "<td>" .$entering_flow[$i] ."</td>";
				echo "<td>" .$nilai[$i] ."</td>";
				echo "<td>" .$peringkat[$i] ."</td>";
				echo "</tr>";
				}
			echo "</table>";
			echo "<a href='Pilih.php'>Reload</a>";
			}
    }else{
		echo "<a href='Pilih.php'>Reload</a>";
		echo "Error: ". $sql . "<br>". $conn->error;
	}
	$conn->close();
	}
	hitungParameter($bobot_layar, $bobot_ram, $bobot_memori, $bobot_cpu, $bobot_berat, $bobot_harga);
	
	
?>