<?php 

require 'db.php';


$id = $_GET['id'];
$action = $_GET['action'];

if($action == "deletegejala") {
    $query = mysqli_query($db, "DELETE FROM `data_hiv` WHERE id = $id");
    if(mysqli_affected_rows($db) > 0 ) {
        echo "<script>alert('data berhasil di hapus'); window.location.href = '../admin/index.php';</script>";
    }
    else {
        echo "<script>alert('data gagal di hapus mohon coba ulang'); window.location.href = '../admin/index.php';</script>";
    }
}
else if($action == "deletestadium") {
    $query = mysqli_query($db, "DELETE FROM `data_stadium` WHERE id = $id");
    if(mysqli_affected_rows($db) > 0 ) {
        echo "<script>alert('data berhasil di hapus'); window.location.href = '../admin/dashboard.php';</script>";
    }
    else {
        echo "<script>alert('data gagal di hapus mohon coba ulang'); window.location.href = '../admin/dashboard.php';</script>";
    }
}
else {
    echo "<script>alert('maaf action tidak valid'); window.location.href = '../admin/index.php';</script>";
}



?>