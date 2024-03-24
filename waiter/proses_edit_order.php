<?php
include '../koneksi.php';
session_start();

$id_pesanan = $_POST['id_pesanan'];
$id_user = $_SESSION['id_user'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_menu = $_POST['id_menu'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($koneksi, "UPDATE pesanan SET id_menu='$id_menu', jumlah='$jumlah', id_user='$id_user' WHERE id_pesanan='$id_pesanan'");
if($query){
    header("Location: order.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(order.php);</script>";
}
?>