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
        <h3 class="logo">RESTORAN</h3>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="transaksi.php">TRANSAKSI</a>
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <table>
            <tr>
                <th>NO</th>
                <th>ID TRANSAKSI</th>
                <th>ID PESANAN</th>
                <th>PELANGGAN</th>
                <th>MEJA</th>
                <th>MENU</th>
                <th>JUMLAH</th>
                <th>TOTAL</th>
                <th>BAYAR</th>
                <th>KEMBALIAN/KEKURANGAN</th>
                <th>OPSI</th>
            </tr>
            <?php
            include '../koneksi.php';

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT pesanan.*, meja.*, transaksi.*, menu.*, 
            pelanggan.* FROM pesanan JOIN transaksi ON pesanan.id_pesanan = transaksi.id_pesanan JOIN 
            menu ON pesanan.id_menu=menu.id_menu JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan JOIN meja ON 
            pesanan.id_meja=meja.id_meja ORDER BY id_transaksi ASC");
            foreach($query as $data){
                $kembali = $data['bayar'] - $data['total'];
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_transaksi']; ?></td>
                <td><?= $data['id_pesanan']; ?></td>
                <td><?= $data['nama_pelanggan']; ?></td>
                <td><?= $data['nama_meja']; ?></td>
                <td><?= $data['nama_menu']; ?></td>
                <td><?= $data['jumlah']; ?></td>
                <td><?= number_format($data['total'],2,',','.'); ?></td>
                <td><?= number_format($data['bayar'],2,',','.'); ?></td>
                <td><?= number_format($kembali,2,',','.'); ?></td>
                <td>
                    <button class="btn" style="background-color: red;"><a href="proses_hapus_transaksi.php?id_transaksi=<?= $data['id_transaksi'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>