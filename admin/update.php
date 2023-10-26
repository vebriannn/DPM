<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../assets/css/dasboard.css">
    </head>
    <body>
        <section class="dashboard">
            <div class="row m-0 p-0">
                <div class="col-2 side-bar shadow p-0 ">
                    <div class="container-fluid p-0">
                        <h1 class="fw-bold fs-2 text-center mt-5">DPM</h1>
                        <div class="menu-navigation mt-5">
                            <div class="dashboard-menu d-flex justify-content-center">
                                <div class="row w-100">
                                    <div class="col-3 p-0">
                                        <i class="bi bi-house"></i>
                                    </div>
                                    <div class="col-9 p-0">
                                        <a href="dashboard.php">Back </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-10 content p-0 ">
                    <div class="container">
                        <div class="card mt-5" style="width: 90%; margin: 0 auto;">
                            <form action="../php/update.php" method="POST">
                                <div class="card-header">
                                    <h3 class="m-0 p-0">Edit Data</h3>
                                </div>
                                <div class="card-body pb-0">    
                                    <div class="mb-3">
                                        <label for="kodePenyakit" class="form-label">Kode Penyakit</label>
                                        <input type="hidden" name="id" value="<?= $_GET['edit']?>">
                                        <input type="text" class="form-control" name="kode_penyakit" id="kodePenyakit" placeholder="Kode Penyakit" value="<?= $_GET['kode']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gejala" class="form-label">Gejala</label>
                                        <input type="text" class="form-control" name="gejala" id="gejala" placeholder="Gejala" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="solusi" class="form-label">Solusi</label>
                                        <textarea class="form-control" id="solusi" rows="8" name="solusi" required></textarea>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-center bg-white border-0 pb-4">
                                    <button type="submit" class="btn btn-success pt-2 pb-2 w-25 fs-6" data-bs-toggle="modal" name="update">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../assets/javascripts/dashboard.js"></script>
    </body>
</html>