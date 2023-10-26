<?php 

require 'db.php';


$id = $_GET['id'];


$query = mysqli_query($db, "DELETE FROM `data_hiv` WHERE id = $id");
if(mysqli_affected_rows($db) > 0 ) {
    echo "<script>alert('data berhasil di hapus'); window.location.href = '../admin/dashboard.php';</script>";
}
else {
    echo "<script>alert('data gagal di hapus mohon coba ulang'); window.location.href = '../admin/dashboard.php';</script>";
}


?>