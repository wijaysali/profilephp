<?php

include "koneksi.php";

$sql = "INSERT INTO person(
    id,
    nama,
    role,
    availability,
    age,
    location,
    years_experience,
    email
) VALUE (
    '1',
    'Hacktiv8',
    'Frontend Developer',
    'Full Time',
    '25',
    'Jakarta',
    '2',
    'email@gmail.com'
)";

if($koneksi->query($sql) == TRUE){
    echo "Insert Data Berhasil";
}else {
    echo "Gagal Insert Data";
}

?>