<!DOCTYPE html>
<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
 <h2>Simple CRUD</h2>
 
 <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
 
 <h3>Tambah Data</h3>
 
 <form action="tambah-proses.php" method="post">
  <table cellpadding="3" cellspacing="0">
   <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" required></td>
   </tr>
   <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" name="email" size="30" required></td>
   </tr>
   <tr>
    <td>No. telp</td>
    <td>:</td>
    <td><input type="text" name="no_tel" size="30" required></td>
   </tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="tambah" value="Tambah"></td>
   </tr>
  </table>
 </form>
</body>
</html>