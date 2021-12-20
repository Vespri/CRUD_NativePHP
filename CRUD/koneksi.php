<?php
$koneksi = new mysqli('localhost', 'root', '','testing');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>