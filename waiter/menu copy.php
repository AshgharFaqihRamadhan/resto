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
            <a href="meja.php">MEJA</a>
            <a href="order.php">ORDER</a>
            <a href="transaksi.php">TRANSAKSI</a>
            <a href="user.php">USER</a>
        </nav>
    </header>
    <section class="main">
        <button class="add-btn"><a href="tambah_menu.php">Tambah</a></button>
        <table>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>MENU</th>
                <th>HARGA</th>
                <th>OPSI</th>
            </tr>
            <?php
            include '../koneksi.php';

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY id_menu ASC");
            foreach($query as $data){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_menu']; ?></td>
                <td><?= $data['nama_menu']; ?></td>
                <td><?= $data['harga']; ?></td>
                <td>
                <button class="btn" style="background-color: green;"><a href="edit_menu.php?id_menu=<?= $data['id_menu'];?>">Edit</a></button> 
                    <button class="btn" style="background-color: red"><a href="hapus_menu.php?id_menu=<?= $data['id_menu'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>