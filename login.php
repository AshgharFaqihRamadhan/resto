<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="script.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <div class="modal">
        <div class="container"> 
            <h1>Login</h1>
            <form method="POST" action="proses_login.php">
                <label>Username</label><br>
                <input type="text" name="username">
                <label>Password</label><br>
                <input type="password" name="password">
                <button name="submit" class="btn" value="Login">Login</button><br>
                <!-- <br><p>Belum punya akun?</p><br> -->
                <!-- <a href="Registrasi.html"><p style="color: blue; margin-top: 15px; font-size: 13px;">Buat akun di sini!</p></a> -->
            </form>
            
        </div>
    </div>
</body>
</html>