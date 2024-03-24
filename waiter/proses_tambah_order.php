<?php
include '../koneksi.php';
session_start();

$id_pelanggan = $_POST['id_pelanggan'];
$id_user = $_SESSION['id_user'];
$id_meja = $_POST['id_meja'];
$id_menu = $_POST['id_menu'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($koneksi, "INSERT INTO pesanan(id_pelanggan, id_meja, id_menu, id_user, jumlah) VALUE('$id_pelanggan', '$id_meja', '$id_menu', '$id_user', '$jumlah')");

if($query){
    header("Location: order.php");
}else{
    echo "<script>
    alert('Gagal tambah pesanan');
    window.location.assign(order.php);</script>";
}
?>