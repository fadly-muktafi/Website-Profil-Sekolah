<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include '../config/koneksi.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $tanggal = date('Y-m-d');

    if ($judul == '' || $isi == '') {
        $error = "Judul dan isi tidak boleh kosong!";
    } else {
        $query = "INSERT INTO berita (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')";
        if (mysqli_query($conn, $query)) {
            $success = "Berita berhasil ditambahkan!";
        } else {
            $error = "Gagal menambahkan berita!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
</head>
<body>
    <h2>Tambah Berita Baru</h2>
    <a href="dashboard.php">← Kembali ke Dashboard</a><br><br>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <?php if ($success): ?>
        <p style="color:green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Judul</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Isi Berita</label><br>
        <textarea name="isi" rows="6" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
