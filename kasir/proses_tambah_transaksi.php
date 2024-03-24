<?php
include '../koneksi.php';
session_start();

$id_pesanan = $_POST['id_pesanan'];
$total = $_POST['total'];
$bayar = $_POST['bayar'];

$query = mysqli_query($koneksi, "INSERT INTO transaksi(id_pesanan, total, bayar) VALUE('$id_pesanan', '$total', '$bayar')");

if($query){
    header("Location: transaksi.php");
}else{
    echo "<script>
    alert('Gagal tambah transaksi');
    window.location.assign(transaksi.php);</script>";
}
?>