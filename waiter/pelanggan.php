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
        <h3 class="logo">RESTORAN</h3>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="order.php">ORDER</a>
            <a href="pelanggan.php">PELANGGAN</a>
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <button class="add-btn"><a href="tambah_pelanggan.php">Tambah</a></button>
        <table>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>NAMA PELANGGAN</th>
                <th>JENIS KELAMIN</th>
                <th>TELEPON</th>
                <th>ALAMAT</th>
                <!-- <th>OPSI</th> -->
            </tr>
            <?php
            include '../koneksi.php';

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC");
            foreach($query as $data){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_pelanggan']; ?></td>
                <td><?= $data['nama_pelanggan']; ?></td>
                <td><?= $data['jeniskelamin']; ?></td>
                <td><?= $data['telp']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td>
                    <button class="btn" style="background-color: green;"><a href="tambah_order.php?id_pelanggan=<?= $data['id_pelanggan'];?>">Order</a></button> 
                    <!-- <button class="btn" style="background-color: red"><a href="hapus_menu.php?id_menu=<?= $data['id_menu'];?>">Hapus</a></button> -->
                </td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>