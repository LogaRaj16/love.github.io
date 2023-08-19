<?php
// Simpan skrip logout.php
session_start();

// Hapus semua data sesi
session_unset();
// Hapus sesi
session_destroy();

// Redirect ke halaman login atau halaman awal
header("Location: index.html"); // Ganti "login.php" dengan halaman yang sesuai
exit();
?>
