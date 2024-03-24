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
            <a href="meja.php">MEJA</a>
            <a href="order.php">ORDER</a>
            <a href="transaksi.php">TRANSAKSI</a>
            <a href="user.php">USER</a>
        </nav>
    </header>
    <section class="main">
        <form method="post" action="proses_tambah_user.php">
            <label>Username</label>
            <input class="form-control" type="text" name="username" required>
            <label>Password</label>
            <input class="form-control" type="text" name="password" required>
            <label>Role</label>
            <select class="form-control" name="role" required>
                <option value="">-</option>
                <option value="admin">Admin</option>
                <option value="Waiter">Waiter</option>
                <option value="Kasir">Kasir</option>
                <option value="Owner">Owner</option>
            </select>

            <button type="submit" value="simpan" style="background-color: #7168f0;"><a>Simpan</a></button>
            <button type="reset" style="background-color: red;"><a href="menu.php">Batal</a></button>
        </form>
        </form>
    </section>
</body>
</html>