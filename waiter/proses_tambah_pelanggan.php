<?php
include '../koneksi.php';

$nama_pelanggan = $_POST['nama_pelanggan'];
$jeniskelamin = $_POST['jeniskelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi, "INSERT INTO pelanggan(nama_pelanggan, jeniskelamin, telp, alamat) VALUE('$nama_pelanggan', '$jeniskelamin', '$telp', '$alamat')");

if($query){
    header("Location: pelanggan.php");
}else{
    echo "<script>
    alert('Gagal tambah menu');
    window.location.assign(pelanggan.php);</script>";
}
?>