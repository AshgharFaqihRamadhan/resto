<?php
include '../koneksi.php';

$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$harga_menu = $_POST['harga_menu'];

$query = mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama_menu', harga_menu='$harga_menu' WHERE id_menu='$id_menu'");
if($query){
    header("Location: menu.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(menu.php);</script>";
}
?>