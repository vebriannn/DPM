<?php 

session_start();

$_SESSION['login'] = [];
$_SESSION['nama'] = [];
session_unset();
session_destroy();

echo "<script>alert('anda berhasil logout'); window.location.href = '../auth';</script>";
?>