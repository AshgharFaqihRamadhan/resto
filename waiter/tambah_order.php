<?php
include '../koneksi.php';
session_start();

$id_pelanggan = $_GET['id_pelanggan'];
$query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="order.php">ORDER</a>
            <a href="pelanggan.php">PELANGGAN</a>
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <form method="post" action="proses_tambah_order.php?id_pelanggan=<?=$id_pelanggan?>">
            <label>ID Pelanggan</label>
            <input class="form-control" type="text" name="id_pelanggan" value="<?= $data['id_pelanggan']; ?>" required>
            <label>ID Petugas</label>
            <input class="form-control" value="<?= $_SESSION['id_user'] ?>" required>
            <label>Meja</label>
            <select class="form-control" name="id_meja" required>
                <option value="">-</option>
                <?php
                $menu = mysqli_query($koneksi, "SELECT * FROM meja ORDER BY id_meja ASC");
                foreach($menu as $data_menu){
                ?>
                <option value="<?= $data_menu['id_meja']; ?>"><?= $data_menu['id_meja']; ?> | <?= $data_menu['nama_meja'];} ?> 
            </select>
            <label>Menu</label>
            <select class="form-control" name="id_menu" required>
                <option value="">-</option>
                <?php
                $menu = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY id_menu ASC");
                foreach($menu as $data_menu){
                ?>
                <option value="<?= $data_menu['id_menu']; ?>"><?= $data_menu['id_menu']; ?> | <?= $data_menu['nama_menu']; ?> | <?= $data_menu['harga']; ?></option><?php }?>
            </select>
            <label>jumlah</label>
            <input class="form-control" type="number" name="jumlah" required>

            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="order.php">Batal</a></button>
        </form>
    </section>
</body>
</html>