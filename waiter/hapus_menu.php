<?php
include '../koneksi.php';

$id_menu = $_GET['id_menu'];
$query = mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu='$id_menu'");
if($query){
    header("Location: menu.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(menu.php);</script>";
}
?>