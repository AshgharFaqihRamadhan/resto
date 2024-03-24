<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h3 class="logo">RESTORAN</h3>
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="meja.php">MEJA</a>
            <a href="user.php">USER</a>
        </nav>
        </nav>
    </header>
    <section class="main">
        <button class="add-btn"><a href="tambah_user.php">Tambah</a></button>
        <table>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ROLE</th>
                <th>OPSI</th>
            </tr>
            <?php
            include '../koneksi.php';

            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user ASC");
            foreach($query as $data){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id_user']; ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['password']; ?></td>
                <td><?= $data['role']; ?></td>
                <td>
                <button class="btn" style="background-color: green;"><a href="edit_user.php?id_user=<?= $data['id_user'];?>">Edit</a></button> 
                    <button class="btn" style="background-color: red"><a href="hapus_user.php?id_user=<?= $data['id_user'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php }?>
        </table>
    </section>
</body>
</html>