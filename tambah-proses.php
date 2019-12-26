<?php
if(isset($_POST['tambah'])){
    include('koneksi.php');

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_tel = $_POST['no_tel'];

    $input = mysqli_query($koneksi, "INSERT INTO mhs VALUES(NULL, '$nama', '$email', '$no_tel') ") or die ("Koneksi Gagal");

    if($input){
        echo 'Data Berhasil ditambahkan';
        echo '<a href="tambah.php">Kembali</a>';
    }else{
        echo 'Gagal menambah data';
        echo '<a href="tambah.php">Kembali</a>';
    }
}else{
    echo'<script>window.history.back()</script>';
}
?>