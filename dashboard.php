<?php
session_start();
include 'config/koneksi.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard - Grimoire Vault</title>
    <style>
        body { background-color: #1a1a2e; color: #fff; font-family: 'Courier New', monospace; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #0f3460; }
        th { background-color: #16213e; color: #e94560; padding: 10px; }
        td { padding: 10px; text-align: center; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; background: #0f3460; border-radius: 3px; }
        .btn-danger { background: #e94560; }
        .btn-add { background: #4caf50; font-size: 16px; padding: 10px 15px; }
    </style>
</head>
<body>
    <h2>Welcome, Mage <?php echo $_SESSION['username']; ?> 🧙‍♂️</h2>
    <a href="tambah_buku.php" class="btn btn-add">+ Forge New Grimoire</a>
    <a href="logout.php" class="btn btn-danger" style="float: right;">Logout</a>
    
    <table>
        <tr>
            <th>Sampul</th>
            <th>Nama Grimoire</th>
            <th>Elemen (Kategori)</th>
            <th>Penyihir (Penulis)</th>
            <th>Stok & Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM grimoire");
        while ($d = mysqli_fetch_array($data)) {
            // Logika Status Ketersediaan
            $status = ($d['stok'] > 0) ? "<span style='color: lime;'>Tersedia</span>" : "<span style='color: red;'>Dipinjam</span>";
        ?>
        <tr>
            <td><img src="uploads/<?php echo $d['sampul']; ?>" width="50" style="border: 2px solid #e94560;"></td>
            <td><?php echo $d['judul']; ?></td>
            <td><?php echo $d['kategori']; ?></td>
            <td><?php echo $d['penulis']; ?></td>
            <td><?php echo $d['stok']; ?> <br> (<?php echo $status; ?>)</td>
            <td>
                <a href="hapus_buku.php?id=<?php echo $d['id']; ?>" class="btn btn-danger" onclick="return confirm('Hancurkan grimoire ini?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>