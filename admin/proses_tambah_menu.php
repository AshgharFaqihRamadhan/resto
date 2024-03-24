<?php
include '../koneksi.php';

$nama_menu = $_POST['nama_menu'];
$harga_menu = $_POST['harga_menu'];

$query = mysqli_query($koneksi, "INSERT INTO menu(nama_menu, harga_menu) VALUE('$nama_menu', '$harga_menu')");

if($query){
    header("Location: menu.php");
}else{
    echo "<script>
    alert('Gagal tambah menu');
    window.location.assign(menu.php);</script>";
}
?>