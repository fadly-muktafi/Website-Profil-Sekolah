<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include '../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM berita WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Berita tidak ditemukan.";
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);

    if ($judul == '' || $isi == '') {
        $error = "Judul dan isi tidak boleh kosong!";
    } else {
        $update = "UPDATE berita SET judul='$judul', isi='$isi' WHERE id = $id";
        if (mysqli_query($conn, $update)) {
            $success = "Berita berhasil diperbarui!";
            // Refresh data setelah update
            $query = "SELECT * FROM berita WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
        } else {
            $error = "Gagal memperbarui berita!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
</head>
<body>
    <h2>Edit Berita</h2>
    <a href="dashboard.php">← Kembali ke Dashboard</a><br><br>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <?php if ($success): ?>
        <p style="color:green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Judul</label><br>
        <input type="text" name="judul" value="<?php echo htmlspecialchars($row['judul']); ?>" required><br><br>

        <label>Isi Berita</label><br>
        <textarea name="isi" rows="6" required><?php echo htmlspecialchars($row['isi']); ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
