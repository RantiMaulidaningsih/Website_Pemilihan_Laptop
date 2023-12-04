<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in disini</title>
<style type="text/css">
body {
	background-color: #000;
	color: #FFF;
}
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="Config_signin.php">
  <p align="center"><img src="Images/Sign In.png" width="720" height="109" /></p>
  <div align="center">
    <table width="494" height="134" border="0">
      <tr>
        <td>Nama</td>
      <td>:</td>
      <td><label for="nama"></label>
        <input type="text" name="nama" id="nama" /></td>
    </tr>
      <tr>
        <td>Email</td>
      <td>:</td>
      <td><label for="email"></label>
        <input type="text" name="email" id="email" /></td>
    </tr>
      <tr>
        <td width="160">Nama pengguna</td>
      <td width="10">:</td>
      <td width="310"><label for="namapengguna"></label>
        <input type="text" name="namapengguna" id="namapengguna" /></td>
    </tr>
      <tr>
        <td>Kata sandi</td>
      <td>:</td>
      <td><label for="katasandi"></label>
        <input type="password" name="katasandi" id="katasandi" /></td>
    </tr>
      <tr>
        <td>Level</td>
      <td>:</td>
      <td><label for="level"></label>
        <select name="level" id="level">
          <option>Admin</option>
          <option>User</option>
        </select></td>
    </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      <td><input type="submit" name="login" id="login" value="Daftar" /></td>
    </tr>
    </table>
  </div>
</form>
</body>
</html>