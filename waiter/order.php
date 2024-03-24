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
        <button class="add-btn"><a href="tambah_order.php">Tambah</a></button>
        <table>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>ID MEJA</th>
                <th>MEJA</th>
                <th>ID MENU</th>
                <th>MENU</th>
                <th>ID PELANGGAN</th>
                <th>PELANGGAN</th>
                <th>JUMLAH</th>
                <th>ID USER</th>
                <th>OPSI</th>
            </tr>
            <?php
            include '../koneksi.php';
            session_start();

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT meja.id_meja, meja.nama_meja, pesanan.id_pesanan, pesanan.id_menu, pesanan.id_pelanggan, 
            pesanan.jumlah, pesanan.id_user, menu.nama_menu, pelanggan.nama_pelanggan FROM pesanan 
            INNER JOIN menu ON pesanan.id_menu=menu.id_menu INNER JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan INNER JOIN meja ON 
            pesanan.id_meja=meja.id_meja ORDER BY id_pesanan ASC");
            foreach($query as $data){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_pesanan']; ?></td>
                <td><?= $data['id_meja']; ?></td>
                <td><?= $data['nama_meja']; ?></td>
                <td><?= $data['id_menu']; ?></td>
                <td><?= $data['nama_menu']; ?></td>
                <td><?= $data['id_pelanggan']; ?></td>
                <td><?= $data['nama_pelanggan']; ?></td>
                <td><?= $data['jumlah']; ?> pcs</td>
                <td><?= $data['id_user']; ?></td>
                <td>
                    <button class="btn" style="background-color: green;"><a href="edit_order.php?id_pesanan=<?= $data['id_pesanan'];?>">Edit</a></button> 
                    <button class="btn" style="background-color: red"><a href="hapus_order.php?id_pesanan=<?= $data['id_pesanan'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>