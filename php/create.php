<?php 

require 'db.php';

if($_POST['action'] == "addgejala") {
    if(isset($_POST['add'])) {
        $kode = $_POST['kode_gejala'];
        $gejala =  $_POST['gejala'];
    
        $results = mysqli_query($db, "INSERT INTO `data_hiv` (`id`, `kode_gejala`, `gejala`) VALUES ('','$kode','$gejala')");
        if(mysqli_affected_rows($db) > 0) {
            echo "<script>alert('data berhasil di tambahkan'); window.location.href = '../admin/index.php';</script>";
        }
        else {
            echo "<>alert('data gagal di tambahkan mohon coba ulang'); window.location.href = '../admin/index.php'</script>";
        }
    }
}
else if($_POST['action'] == "addstadium") {
    if(isset($_POST['add'])) {
        $kode = $_POST['kode_stadium'];
        $stadium =  $_POST['stadium'];

        $results = mysqli_query($db, "INSERT INTO `data_stadium` (`id`, `kode_stadium`, `stadium`  VALUES ('','$kode','$stadium')");
        if(mysqli_affected_rows($db) > 0) {
            echo "<script>alert('data berhasil di tambahkan'); window.location.href = '../admin/dashboard.php';</script>";
        }
        else {
            echo "<>alert('data gagal di tambahkan mohon coba ulang'); window.location.href = '../admin/dashboard.php'</script>";
        }
    }
}
?>