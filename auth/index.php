<?php 

session_start();

if(isset($_SESSION['login'])) {
    header("Location: ../admin");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPM | Verifikasi </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/auth.css?v=<?php time()?>">
</head>
<body>
    <section class="auth" id="auth">
        <div class="container-fluid">
            <div class="sign-auth">
                <div class="row h-100">
                    <div class="col-6 left-column d-flex justify-content-center align-items-center h-100">
                        <div class="text-auth d-flex justify-content-center align-items-center flex-column">
                            <h1 class="fw-bold fw-semibold title">Welcome Back!</h1>
                            <p class="subtitle">To keep connected with us please create <br> account with personal info</p>
                            <button class="btn btn-form active fw-bold">Sign In Now</button>
                        </div>
                    </div>
                    <div class="col-6 right-column bg-body-tertiary h-100">
                        <div class="container d-flex justify-content-center align-items-center flex-column h-100">
                            <div class="forms d-flex justify-content-center align-items-center flex-column w-100">
                                <h1 class="fw-bold fw-semibold title-form mb-3">Create Account</h1>
                                <div class="icon-sosmed d-flex">
                                    <h5 class="ms-3"><i class="bi bi-facebook"></i></h5>
                                    <h5 class="ms-3"><i class="bi bi-google"></i></h5>
                                    <h5 class="ms-3"><i class="bi bi-instagram"></i></h5>
                                </div>

                                <!-- daftar akun -->
                                <div class="form form-signup mt-4 w-100 d-flex justify-content-center align-items-center flex-column">
                                    <p class="form-text fw-bold text-center">or use your email for registration</p>
                                    <form action="function.php" method="POST" class="w-100 d-flex justify-content-center align-items-center flex-column form-action">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control shadow-none" placeholder="Name" name="name" id="name" required>
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control shadow-none" placeholder="Email" name="email" id="email"   required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control shadow-none" placeholder="password" name="password" id="password" required>
                                        </div>
                                        <input type="hidden" name="action" value="daftar">
                                        <button type="submit" class="btn mt-4 fw-bold" name="submit">Sign Up Now</button>
                                    </form>
                                </div>

                                <!-- login akun -->
                                <div class="form form-signin mt-4 w-100 d-flex justify-content-center align-items-center flex-column d-none">
                                    <p class="form-text fw-bold text-center">or use your account</p>    
                                    <form action="function.php" method="POST" class="w-100 d-flex justify-content-center align-items-center flex-column form-action">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control shadow-none" placeholder="Email" name="email" id="email" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control shadow-none" placeholder="password" name="password" id="password" required>
                                        </div>
                                        <input type="hidden" name="action" value="masuk">
                                        <button type="submit" class="btn mt-4 fw-bold" name="submit">Sign In Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/javascripts/auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>