<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'wongkitogalo';
    $dbname = 'db_pbw';

    // Membuat koneksi
    $conn = new mysqli($host, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    } else {
        echo "Koneksi berhasil!";
    }
?>
