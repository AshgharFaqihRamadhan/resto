<?php
include '../koneksi.php';

$id_meja = $_POST['id_meja'];
$nama_meja = $_POST['nama_meja'];

$query = mysqli_query($koneksi, "UPDATE meja SET nama_meja='$nama_meja', WHERE id_meja='$id_meja'");
if($query){
    header("Location: meja.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(meja.php);</script>";
}
?>