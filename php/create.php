<?php 

require 'db.php';

if(isset($_POST['add'])) {
    $kode = $_POST['kode_penyakit'];
    $gejala =  $_POST['gejala'];
    $solusi = $_POST['solusi'];
    $point = "1";

    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s', time());

    $results = mysqli_query($db, "INSERT INTO `data_hiv` (`id`, `kode_penyakit`, `gejala`, `solusi`, `point`, `deleted_at`, `created_at`, `updated_at`) VALUES ('','$kode','$gejala','$solusi','$point', '','$date','$date')");
    if(mysqli_affected_rows($db) > 0) {
        echo "<script>alert('data berhasil di tambahkan'); window.location.href = '../admin/dashboard.php';</script>";
    }
    else {
        echo "<>alert('data gagal di tambahkan mohon coba ulang'); window.location.href = '../admin/dashboard.php'</script>";
    }

}

?>