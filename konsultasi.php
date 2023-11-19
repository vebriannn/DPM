<?php

// error_reporting(0);

require 'php/db.php';

$query = "SELECT * FROM data_hiv";
$result = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DPM Konsultasikan Keluhan Mu!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/konsultasi.css?v=<?php time()?>">
</head>

<body>

    <section class="navbar-section" id="navbar-section">
        <nav class="navbar navbar-expand-lg shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">DPM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Konsultasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="section1 " id="section1">
        <div class="images-icon d-flex justify-content-between w-100">
            <img src="assets/images/icon-left.png">
            <img src="assets/images/icon-right.png">
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center flex-column h-100">
            <div class="text h-50 d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-center">Kami Menjawab Semua <br> Pertanyaan Anda. </h1>
                <div class="btn-show-form-konsultasi d-flex justify-content-center align-items-center gap-3 mt-3">
                    <img src="assets/images/right-arrow.png" class="img-konsultasi">
                    <a href="#section2" class="btn btn-konsultasi d-flex justify-content-center align-items-center gap-2 pt-2 pb-2 px-4">
                        Konsultasi Sekarang
                    </a>
                    <img src="assets/images/left-arrow.png" class="img-konsultasi">
                </div>
            </div>
            <div class="photo-human d-flex justify-content-end h-50 align-items-center">
                <img src="assets/images/three-human.png">
            </div>
        </div>
    </section>

    <section class="section2 mt-5 pt-5" id="section2">
        <div class="container d-flex justify-content-center flex-column">
            <h1 class="text-center">Konsultasi</h1>
            <img src="assets/images/line.png" class="img-konsultasi">
            <div class="card" id="card-pertanyaan">
                <div class="card-body d-flex justify-content-around flex-column align-items-center">
                    <p class="card-title fw-bold">Jawablah Pertanyaan Berikut Ini</p>
                    <h3 class="card-tex fw-bold text-center" id="soal">Apakah Anda Mengalami</h3>
                    <div class="button-confirm">
                        <button type="submit" class="btn btn-ya fw-bold quest" value="yes" id="btn-quest">Ya</button>
                        <button type="submit" class="btn btn-no fw-bold quest" value="no" id="btn-quest">Tidak</button>
                        <button type="button" class="btn btn-hasil fw-bold d-none" id="btn-hasil" >Lihat Hasil</button>
                    </div>
                </div>
                
                <ul class="list-gejala" id="list-gejala">

                </ul>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/javascripts/konsultasi.js"></script>
</body>

</html>