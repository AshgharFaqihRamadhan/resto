<?php
include '../koneksi.php';
session_start();

$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($koneksi, "SELECT pesanan.*, menu.*, meja.*, pelanggan.* FROM pesanan 
INNER JOIN menu ON pesanan.id_menu=menu.id_menu 
INNER JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan 
INNER JOIN meja ON pesanan.id_meja=meja.id_meja WHERE id_pesanan='$id_pesanan'");
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
        <form method="post" action="proses_edit_order.php?id_pesanan=<?=$id_pesanan?>">
            <label>ID Pesanan</label>
            <input class="form-control" type="text" name="id_pesanan" value="<?= $data['id_pesanan']; ?>" required>
            <label>Petugas</label>
            <input class="form-control" value="<?= $_SESSION['id_user']; ?>" required>
            <label>Meja</label>
            <select class="form-control" name="id_menu" required>
                <option value=""><?=$data['nama_meja']; ?></option>
                <?php
                $meja = mysqli_query($koneksi, "SELECT * FROM meja ORDER BY id_meja ASC");
                foreach($meja as $data_meja){
                ?>
                <option value="<?= $data_menu['id_meja']; ?>"><?= $data_meja['id_meja']; ?> | <?= $data_meja['nama_meja']; ?></option><?php }?>
            </select>
            <label>Menu</label>
            <select class="form-control" name="id_menu" required>
                <option value=""><?=$data['nama_menu']; ?></option>
                <?php
                $menu = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY id_menu ASC");
                foreach($menu as $data_menu){
                ?>
                <option value="<?= $data_menu['id_menu']; ?>"><?= $data_menu['id_menu']; ?> | <?= $data_menu['nama_menu']; ?> | <?= $data['harga']; ?></option><?php }?>
            </select>
            <label>jumlah</label>
            <input class="form-control" type="number" name="jumlah" value="<?= $data['jumlah']; ?>" required>

            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="order.php">Batal</a></button>
        </form>
        </form>
    </section>
</body>
</html>