<?php
include '../koneksi.php';

$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama_menu', harga='$harga' WHERE id_menu='$id_menu'");
if($query){
    header("Location: menu.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(menu.php);</script>";
}
?>