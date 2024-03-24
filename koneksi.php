<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'restoran');

    if(!$koneksi){
        echo"Gagal terkoneksi";
    }
?>