<?php
// Ambil dari environment (App Settings Azure)
$host = getenv('AZURE_MYSQL_HOST') ?: 'localhost';
$db   = getenv('AZURE_MYSQL_DBNAME') ?: 'laravel-database';
$user = getenv('AZURE_MYSQL_USERNAME') ?: 'root';
$pass = getenv('AZURE_MYSQL_PASSWORD') ?: '';
$port = getenv('AZURE_MYSQL_PORT') ?: 3306;

// Flag SSL (kalau di Azure, pakai MYSQLI_CLIENT_SSL)
$flagEnv = getenv('AZURE_MYSQL_FLAG');
$clientFlag = 0;
if ($flagEnv === 'MYSQLI_CLIENT_SSL') {
    $clientFlag = MYSQLI_CLIENT_SSL;
}

// Inisialisasi koneksi
$conn = mysqli_init();

// Koneksi ke MySQL Azure
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, (int)$port, null, $clientFlag)) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
