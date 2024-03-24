<?php
include '../koneksi.php';

$id_user = $_GET['id_user'];
$query = mysqli_query($koneksi, "DELETE FROm user WHERE id_user='$id_user'");
if($query){
    header("Location: user.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(user.php);</script>";
}
?>