<?php
include '../koneksi.php';
session_start();

$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'");
if($query){
    header("Location: order.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(order.php);</script>";
}
?>