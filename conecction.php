<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "aa";

//membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDatabase);


//cek koneksi
if(!$conn){
    die("Koneksi Gagal : ".mysqli_connect_error());
}
?>