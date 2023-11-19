<?php 

session_start();
$_SESSION['login'] = [];
session_unset();
session_destroy();

echo "<script>alert('data berhasil di ubah'); window.location.href = '../auth/';</script>";
?>