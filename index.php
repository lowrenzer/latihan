<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi CRUD</title>
</head>
<body>
 <h2>Simple CRUD</h2>
 
 <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
 
 <h3>Data Mahasiswa</h3>
 
 <table cellpadding="5" cellspacing="0" border="1">
  <tr bgcolor="#CCCCCC">
   <th>No.</th>
   <th>Nama</th>
   <th>Email</th>
   <th>No. Telp</th>
  </tr>
  <?php
  include('koneksi.php');
  $query = mysqli_query($koneksi, "SELECT * FROM mhs") or die ("Gagal");
    if(mysqli_num_rows($query) == 0){
        echo '<tr><td colspan="5">Tidak Ada data</td></tr>';
    }else{
        $no = 1;
        while($data = mysqli_fetch_assoc($query)){
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$data['nama'].'</td>';
            echo '<td>'.$data['email'].'</td>';
            echo '<td>'.$data['no_tel'].'</td>';
            echo '</tr>';
            $no++;
        }
    }
  ?>
 </table>
</body>
</html>