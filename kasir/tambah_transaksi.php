<?php
include '../koneksi.php';

$id_pesanan = $_GET['id_pesanan'];
$sql = "SELECT pesanan.*, meja.*, menu.*, pelanggan.nama_pelanggan FROM pesanan JOIN menu ON pesanan.id_menu=menu.id_menu 
JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan JOIN meja ON pesanan.id_meja=meja.id_meja WHERE id_pesanan='$id_pesanan' ";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>transaksi</title>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="transaksi.php">TRANSAKSI</a>
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <form method="post" action="proses_tambah_transaksi.php?id_pesanan=<?=$id_pesanan?>">
            <label>ID Pesanan</label>
            <input class="form-control" type="text" name="id_pesanan" value="<?= $data['id_pesanan']; ?>" required>
            <label>Meja</label>
            <input class="form-control" type="text" value="<?= $data['nama_meja']; ?>" required>
            <label>Menu</label>
            <input class="form-control" type="text" value="<?= $data['nama_menu']; ?>" required>
            <label>jumlah</label>
            <input class="form-control" type="text" value="<?= $data['jumlah']; ?>" required>
            <label>Harga Menu</label>
            <input class="form-control" type="text" value="<?= $data['harga']; ?>" required>
            <label>Total</label>
            <input class="form-control" type="number" name="total" value="<?= $data['jumlah'] * $data['harga'];?>"required>
            <label>Bayar</label>
            <input class="form-control" type="number" name="bayar" required>
            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="transaksi.php">Batal</a></button>
        </form>
        </form>
    </section>
</body>
</html>