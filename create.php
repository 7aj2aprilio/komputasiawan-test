<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES ('$nim', '$nama', '$jurusan', '$email')";
    
    if(mysqli_query($conn, $query)) {
        header("Location: index.php?msg=added");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f4; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #555; font-weight: bold; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        .btn { padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-secondary { background: #6c757d; color: white; text-decoration: none; display: inline-block; }
        .btn:hover { opacity: 0.8; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Mahasiswa</h1>
        
        <form method="POST">
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" required>
            </div>
            
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" required>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>