<?php 

require 'db.php';

if($_POST['action'] == "editgejala") {
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode_gejala'];
        $gejala =  $_POST['gejala'];
    
        
        $results = mysqli_query($db, "UPDATE `data_hiv` SET `kode_gejala`='$kode',`gejala`='$gejala' WHERE id = $id");
        if(mysqli_affected_rows($db) > 0) {
            echo "<script>alert('data berhasil di ubah'); window.location.href = '../admin/index.php';</script>";
        }
        else {
            echo "<script>alert('data gagal di ubah, mohon coba ulang'); window.location.href = '../admin/index.php'</script>";
        }
    
    }
}
else if($_POST['action'] == "editstadium") {
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode_stadium'];
        $stadium =  $_POST['stadium'];
    
        $results = mysqli_query($db, "UPDATE `data_stadium` SET `kode_stadium`='$kode',`stadium`='$stadium' WHERE id = $id");
        if(mysqli_affected_rows($db) > 0) {
            echo "<script>alert('data berhasil di ubah'); window.location.href = '../admin/dashboard.php';</script>";
        }
        else {
            echo "<script>alert('data gagal di ubah, mohon coba ulang'); window.location.href = '../admin/dashboard.php'</script>";
        }
    
    }
}
else {
    echo "<script>alert('maaf action tidak valid'); window.location.href = '../admin/index.php';</script>";
}

?>