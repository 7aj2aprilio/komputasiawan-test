<?php
$host     = "tugas-php-server.postgres.database.azure.com";
$dbname   = "tugas-php-database";
$user     = "tmoblcyqdi";
$password = "vT4daiQ$PuGsDrBA"; // jangan dipush ke GitHub ya

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require";

try {
    $conn = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    // echo "Koneksi sukses";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
