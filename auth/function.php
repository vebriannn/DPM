<?php

require '../php/db.php';

session_start();

if(isset($_POST['submit']))
    if($_POST['action'] == "daftar") {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($db, "SELECT * FROM `users` WHERE email = '$email'");

        if(mysqli_num_rows($query) > 0) {
            echo "<script>alert('Maaf email sudah di gunakan');</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }
        else {
            $query = mysqli_query($db, "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$username','$email','$password','admin')");
            echo "<script>alert('Email berhasil di buat');</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }

    }
    else if($_POST['action'] == "masuk") {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($db, "SELECT * FROM `users` WHERE email = '$email'");
        
        if(mysqli_num_rows($query) > 0) {
            $query = mysqli_fetch_array($query);
            if($password == $query['password']) {
                echo "<script>alert('Berhasil Login');</script>";
                $_SESSION['login'] = true;
                $_SESSION['nama'] = $query['name'];
                echo "<script>window.location.href = '../admin'</script>";
            }
            else {
                echo "<script>alert('Maaf password salah!');</script>";
                echo "<script>window.location.href = 'index.php'</script>";
            }
            
        }
        else {
            echo "<script>alert('Maaf email tidak ada');</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }
    }
?>