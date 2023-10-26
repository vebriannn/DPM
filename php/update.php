<?php 

require 'db.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode_penyakit'];
    $gejala =  $_POST['gejala'];
    $solusi = $_POST['solusi'];
    $point = "1";

    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s', time());

    $results = mysqli_query($db, "UPDATE `data_hiv` SET `kode_penyakit`='$kode',`gejala`='$gejala',`solusi`='$solusi' WHERE id = $id");
    if(mysqli_affected_rows($db) > 0) {
        echo "<script>alert('data berhasil di ubah'); window.location.href = '../admin/dashboard.php';</script>";
    }
    else {
        echo "<>alert('data gagal di ubah, mohon coba ulang'); window.location.href = '../admin/update.php'</script>";
    }

}

?>