<?php
    $server = "lowappserver.database.windows.net";
    $user = "lowrenzer";
    $password = "Rezareza1234";
    $database = "lowdb";

    $koneksi = mysqli_connect($server, $user, $password, $database) or DIE ("Koneksi Gagal");
?>
