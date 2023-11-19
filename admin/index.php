<?php

require "../php/db.php";


$query = mysqli_query($db, "SELECT * FROM data_hiv");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard || Gejala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/dasboard.css?v=<?php time() ?>">
</head>

<body>
    <section class="dashboard">
        <div class="row m-0 p-0">
            <div class="col-2 side-bar shadow p-0 ">
                <div class="container-fluid p-0">
                    <h1 class="fw-bold fs-2 text-center mt-5">DPM</h1>
                    <div class="bar-items mt-5">
                        <div class="row pt-2 pb-2">
                            <div class="btn-nav d-flex justify-content-center align-items-center">
                                <span><i class="bi bi-grid-fill"></i></span>
                                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Dashboard
                                </button>
                            </div>
                            <div class="dropdown-dashboard w-100 ">
                                <div class="dropdown-nav collapse " id="collapseExample">
                                    <ul class="p-0 m-0 ">
                                        <li class="pb-2">
                                            <a class="btn p-0 active-nav" href="#">Lihat Gejala</a>
                                        </li>
                                        <li class="pb-2">
                                            <a class="btn p-0" href="dashboard.php">Lihat Stadium</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 content p-0 ">
                <div class="row">
                    <div class="col-12 navbar-content shadow p-0 ">
                        <div class="row w-100 h-100 d-flex justify-content-start align-items-center" style="margin-left: 26px;">
                            <div class="col-5 search">
                                <div class="input-group w-50 shadow" id="filter">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="search" class="form-control shadow-none" placeholder="Search" controls="tabelDataa">
                                </div>
                            </div>
                            <div class="col-5 d-flex justify-content-end gap-4 ">
                                <button class="btn btn-sm fs-6 px-2 p-0 m-0" type="button" data-bs-toggle="dropdown"><span><i class="bi bi-person-fill-check fs-4"></i></span> Jasim </button>
                                <ul class="dropdown-menu mt-2">
                                    <li><a class="dropdown-item fs-6" href="../php/logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 admin-content ">
                        <div class="container-fluid ps-4">
                            <h1 class="fw-bold mt-4 pb-3">Data Penyakit HIV Dan Solusi</h1>
                            <button class="btn btn-add-data d-flex px-3 mt-5" data-bs-toggle="modal" data-bs-target="#addNewData">
                                <i class="bi bi-plus-circle"></i>
                                <p class="ms-2 mb-0">New</p>
                            </button>
                            <div class="tabel-data mt-4 mb-4">
                                <table class="table shadow text-center ">
                                    <thead>
                                        <tr>
                                            <th scope="col">KODE PENYAKIT</th>
                                            <th scope="col">GEJALA</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($data = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td class="text-capitalize"><?= $data['kode_gejala'] ?></td>
                                                <td class="text-capitalize"><?= $data['gejala'] ?></td>
                                                <td>
                                                    <div class="btn-group gap-2 ">
                                                        <a href="form/edit_form_gejala.php?edit=<?= $data['id'] ?>&kode=<?= $data['kode_gejala'] ?>&action=editgejala" class="btn btn-warning"><i class="bi bi-pencil-square"></i></i></a>
                                                        <a href="../php/delete.php?id=<?= $data['id'] ?>&action=deletegejala" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modal-addnew" id="section-model">
        <form action="../php/create.php" method="POST">
            <div class="modal-addnew">
                <input type="hidden" name="action" value="addgejala">
                <div class="modal fade" id="addNewData" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data</h1>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="kodeGejala" class="form-label">Kode Gejala</label>
                                    <input type="text" class="form-control" id="kodeGejala" placeholder="Kode Gejala" name="kode_gejala">
                                </div>
                                <div class="mb-3">
                                    <label for="gejala" class="form-label">Gejala</label>
                                    <input type="text" class="form-control" id="gejala" placeholder="Gejala" name="gejala">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button type="submit" class="btn btn-success" data-bs-toggle="modal" name="add">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../assets/javascripts/dashboard.js?v=<?php time() ?>"></script>
</body>

</html>