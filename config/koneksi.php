<?php
$database_hostname = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'db_web';

try {
    $koneksi = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_username, $database_password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
