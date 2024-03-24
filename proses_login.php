<?php
$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    if($data['role']=='admin'){
        header('Location:admin/index.php');
    }elseif($data['role']=='waiter'){
        header('Location:waiter/index.php');
    }elseif($data['role']=='kasir'){
        header('Location:kasir/index.php');
    }elseif($data['role']=='owner'){
        header('Location:owner/index.php');
    }elseif($data['role']=='pelanggan'){
        header('Location:pelanggan/index.php');
    }
}else{
    echo"<script>
    alert('Login Gagal, Silakan Ulang');
    window.location.assign('Login.php');
    </script>";
}

?>
