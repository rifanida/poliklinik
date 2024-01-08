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

<body class="hold-transition login-page" class="hold-transition login-page" style="background-image: url('assets/dist/img/1.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card  card-outline card-primary" >
            <div class="card-body login-card-body" style="border-radius: 50%;">
            <center><h2><a href="index.php" style="color:black;">Poliklinik UDINUS</a></h2></center>    
            <hr>
            <p class="login-box-msg">Silahkan login sebagai <b class="text-success">Dokter</b> untuk melanjutkan</p>

                <form action="pages/login/checkLogin.php" method="post">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-block btn-primary">
                        Login
                    </button>
                    <br>
                    <center>
                    <p>
                    Login Sebagai <a href="loginUser.php"><span class="text-primary">Pasien</span></a>
                    </p>
                    </center>
                </form>

                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- Belum punya akun? -</p>
                    <a href="register.php" class="btn btn-block btn-primary">
                        Register
                    </a>
                </div> -->
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>