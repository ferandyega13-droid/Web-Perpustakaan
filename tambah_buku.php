<?php
session_start();
if (!isset($_SESSION['username'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Forge Grimoire</title>
    <style>
        body { background: #1a1a2e; color: #fff; font-family: monospace; padding: 20px; }
        .form-box { background: #16213e; padding: 20px; width: 400px; border: 1px solid #e94560; }
        input, select { width: 90%; padding: 8px; margin: 10px 0; background: #1a1a2e; color: #fff; border: 1px solid #0f3460; }
        button { background: #e94560; color: white; padding: 10px; border: none; cursor: pointer; width: 100%; }
    </style>
</head>
<body>
    <div class="form-box">
        <h3>✨ Forge New Grimoire</h3>
        <!-- Enctype wajib untuk upload file[cite: 1] -->
        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="judul" placeholder="Nama Grimoire" required>
            <select name="kategori">
                <option value="Api">Elemen Api</option>
                <option value="Air">Elemen Air</option>
                <option value="Kegelapan">Ilmu Hitam</option>
            </select>
            <input type="text" name="penulis" placeholder="Nama Penyihir" required>
            <input type="number" name="tahun" placeholder="Tahun Ditemukan" required>
            <input type="number" name="stok" placeholder="Jumlah Salinan" required>
            <label>Gambar Sampul (.jpg/.png, Max 2MB):</label>
            <input type="file" name="sampul" accept="image/png, image/jpeg" required>
            <button type="submit">Simpan Grimoire</button>
        </form>
    </div>
</body>
</html>