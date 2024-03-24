<?php
include '../koneksi.php';

$id_transaksi = $_GET['id_transaksi'];
$query = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");
if($query){
    header("Location: transaksi.php");
} else {
    echo "<script>
    alert('Gagal menghapus data');
    window.location.assign('transaksi.php');
    </script>";
}
?>
