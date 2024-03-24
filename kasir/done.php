<?php
include "../koneksi.php";

$id_pesanan = $_GET['id_pesanan'];

$queryUpdate = mysqli_query($koneksi, "UPDATE pesanan SET Status='Lunas' WHERE id_pesanan='$id_pesanan'");

if ($queryUpdate) {
    // Redirect back to the main page
    echo "<script>
    alert('Lunas');
    window.location.assign(index.php);</script>";
    // header("Location: transaksi.php");
} else {
    echo "<script>
    alert('Gagal tambah transaksi');
    window.location.assign(transaksi.php);</script>";
}
