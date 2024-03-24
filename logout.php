<?php
// Mulai sesi
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login_form.php
header("Location: login.php");
exit();
?>
