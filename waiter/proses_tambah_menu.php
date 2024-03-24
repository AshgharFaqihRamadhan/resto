<?php
include '../koneksi.php';

$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksi, "INSERT INTO menu(nama_menu, harga) VALUE('$nama_menu', '$harga')");

if($query){
    header("Location: menu.php");
}else{
    echo "<script>
    alert('Gagal tambah menu');
    window.location.assign(menu.php);</script>";
}
?>