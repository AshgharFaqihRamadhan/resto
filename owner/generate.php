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
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <button class="btn" style="background-color: #7168f0;"><a href="export_generate.php">Export</a></button>
        <!-- <button class="btn" style="background-color: #7168f0;"><a href="print_generate.php">Print</a></button><br> -->
        <table>
            <tr>
                <th>NO</th>
                <th>ID TRANSAKSI</th>
                <th>ID PESANAN</th>
                <th>ID MENU</th>
                <th>NAMA MENU</th>
                <th>ID PELANGGAN</th>
                <th>NAMA PELANGGAN</th>
                <th>JUMLAH</th>
                <th>TOTAL</th>
                <th>BAYAR</th>
                <th>KEMBALIAN</th>
                
            </tr>
            <?php
            include '../koneksi.php';
            session_start();

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT pesanan.*, transaksi.total, transaksi.bayar, transaksi.id_transaksi, menu.id_menu, menu.nama_menu, 
            pelanggan.id_pelanggan, pelanggan.nama_pelanggan FROM pesanan  LEFT JOIN transaksi ON pesanan.id_pesanan = transaksi.id_pesanan LEFT JOIN 
            menu ON pesanan.id_menu=menu.id_menu LEFT JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan");
            
            foreach($query as $data){ 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_transaksi']; ?></td>
                <td><?= $data['id_pesanan']; ?></td>
                <td><?= $data['id_menu']; ?></td>

                <td><?= $data['nama_menu']; ?></td>
                <td><?= $data['id_pelanggan']; ?></td>
                <td><?= $data['nama_pelanggan']; ?></td>
                <td><?= $data['jumlah']; ?> pcs</td>
                <td><?= number_format($data['total'],2,',','.'); ?></td>
                <td><?= number_format($data['bayar'],2,',','.'); ?></td>
                <td><?= number_format($data['bayar'] - $data['total'],2,',','.'); ?></td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>