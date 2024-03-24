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
            <a href="user.php">USER</a>
        </nav>
    </header>
    <section class="main">
        <table>
            <tr>
                <th>NO</th>
                <th>ID TRANSAKSI</th>
                <th>ID PESANAN</th>
                <!-- <th>PELANGGAN</th>
                <th>MENU</th>
                <th>JUMLAH</th> -->
                <th>TOTAL</th>
                <th>BAYAR</th>
                <th>KEMBALIAN</th>
                <!-- <th>OPSI</th> -->
            </tr>
            <?php
            include '../koneksi.php';

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.id_pesanan, transaksi.total, transaksi.bayar
            , pesanan.id_pesanan FROM transaksi JOIN pesanan ON transaksi.id_pesanan=pesanan.id_pesanan ORDER BY id_transaksi ASC");
            foreach($query as $data){
                $kembali = $data['bayar'] - $data['total'];
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_transaksi']; ?></td>
                <td><?= $data['id_pesanan']; ?></td>
                <td><?= number_format($data['total'],2,',','.'); ?></td>
                <td><?= number_format($data['bayar'],2,',','.'); ?></td>
                <td><?= number_format($kembali,2,',','.'); ?></td>
                <!-- <td>
                    <button class="btn" style="background-color: green;"><a href="done.php?id_pesanan=<?= $data['id_pesanan'];?>">Lunas</a></button>
                    <button class="btn" style="background-color: red;"><a href="undone.php?id_transaksi=<?= $data['id_transaksi'];?>">Hapus</a></button>
                </td> -->
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>