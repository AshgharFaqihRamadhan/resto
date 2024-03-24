<?php
session_start();
if(empty($_SESSION['id_user'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../login.php');
    </script>";
}
if($_SESSION['role']!='kasir'){
    echo"<script>
    alert('Maaf Anda Bukan kasir');
    window.location.assign('../login.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Homes</title>
</head>
<body>
    <header>
        <h3 class="logo">RESTORAN</h3>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="transaksi.php">TRANSAKSI</a>
            <a href="generate.php">GENERATE</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <section class="main">
        <?php
        include '../koneksi.php';

        $file = @$_GET['url'];
        if(empty($file)){
            echo "<h1>SELAMAT DATANG KASIR</h1>";
        }
        else{
            include $file.'.php';
        }
        ?>
    </section>
</body>
</html>