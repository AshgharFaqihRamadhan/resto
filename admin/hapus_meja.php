<?php
include '../koneksi.php';

$id_meja = $_GET['id_meja'];
$query = mysqli_query($koneksi, "DELETE FROm meja WHERE id_meja='$id_meja'");
if($query){
    header("Location: meja.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(meja.php);</script>";
}
?>