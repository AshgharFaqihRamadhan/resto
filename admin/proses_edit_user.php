<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', role='$role' WHERE id_user='$id_user'");
if($query){
    header("Location: user.php");
}else{
    echo"<script>
    aler('Gagal edit data');
    window.location.assign(user.php);</script>";
}
?>