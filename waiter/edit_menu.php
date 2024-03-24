<?php
include '../koneksi.php';

$id_menu = $_GET['id_menu'];
$query = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu='$id_menu'");
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
        <form method="post" action="proses_edit_menu.php?id_menu=<?=$id_menu?>">
            <label>ID Menu</label>
            <input class="form-control" type="text" name="id_menu" value="<?= $data['id_menu']; ?>" required>
            <label>Menu</label>
            <input class="form-control" type="text" name="nama_menu" value="<?= $data['nama_menu']; ?>" required>
            <label>Harga</label>
            <input class="form-control" type="number" name="harga" value="<?= $data['harga']; ?>" required>

            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="menu.php">Batal</a></button>
        </form>
        </form>
    </section>
</body>
</html>