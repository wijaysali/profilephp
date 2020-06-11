<?php
    $db_host = "127.0.0.1:3306";
    $db_username = "root";
    $db_password = "Admin-54321";
    $db_name = "profile2";

    $koneksi = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($koneksi->connect_error){
        die("Koneksi ke database gagal");
    }
?>