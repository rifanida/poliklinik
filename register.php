<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page" style="background-image: url('assets/dist/img/1.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="register-box">
            <div class="card  card-outline card-primary w-100">
            <div class="card-body register-card-body" style="border-radius: 50%;">
            <center><h2><a href="index.php" style="color:black;">Poliklinik UDINUS</a></h2></center>
            <hr>    
                <p class="login-box-msg">Daftarkan data anda sebagai <span class="text-primary"><b>Pasien</span> </b></p>

                <form action="pages/register/checkRegister.php" method="post">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="number" class="form-control" placeholder="KTP" name="no_ktp" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat"
                            required></textarea>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input type="number" class="form-control" placeholder="No HP" name="no_hp" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary mb-4">
                        Register
                    </button>
                </form>
                <div class="social-auth-links">
                    <p>Sudah punya akun pasien?</p>
                    <a href="loginUser.php" class="btn btn-block btn-secondary mt-1">
                        Login
                    </a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>