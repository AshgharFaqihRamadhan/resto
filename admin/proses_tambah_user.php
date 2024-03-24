<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "INSERT INTO user(username, password, role) VALUE('$username', '$password', '$role')");

if($query){
    header("Location: user.php");
}else{
    echo "<script>
    alert('Gagal tambah user');
    window.location.assign(user.php);</script>";
}
?>