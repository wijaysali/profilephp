<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $id_user = $_POST["id_user"];
    $nama = $_POST["nama"];
    $role = $_POST["role"];
    $availability = $_POST["availability"];
    $age = $_POST["age"];
    $location = $_POST["lokasi"];
    $experience = $_POST["years"];
    $email = $_POST["email"];
}

$sql = "UPDATE person SET nama='$nama', role='$role', availability='$availability', age='$age', Lokasi='$location', years = '$experience', email = '$email' WHERE id = '$id'";

if($koneksi->query($sql) == TRUE){
    echo "Update Data Berhasil";
}else {
    echo "Update Data Gagal";
}


?>