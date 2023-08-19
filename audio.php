<?php
session_start();

$audioFile = "love.mp4"; // Ganti dengan nama file suara yang sesuai

if (!isset($_SESSION['audio_current_time'])) {
    $_SESSION['audio_current_time'] = 0;
}

header("Content-type: audio/mp4");

readfile($audioFile);
?>
