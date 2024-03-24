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
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="order.php">ORDER</a>
            <a href="pelanggan.php">PELANGGAN</a>
            <a href="generate.php">GENERATE</a>
        </nav>
    </header>
    <section class="main">
        <form method="post" action="proses_tambah_pelanggan.php">
            <label>Nama Pelanggan</label>
            <input class="form-control" type="text" name="nama_pelanggan" required>
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin" required>
                <option value="">-</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <label>No. Telepon</label>
            <input class="form-control" type="number" name="telp" required>
            <label>Alamat</label>
            <input class="form-control" type="text" name="alamat" required>

            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="menu.php">Batal</a></button>
        </form>
    </section>
</body>
</html>