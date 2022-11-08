<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="<?= base_url('assets3/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
</head>

<body class="bg-gradient-primary" style="background: linear-gradient(#136c16ee, #136c16f3 55%), url(&quot;https://c4.wallpaperflare.com/wallpaper/971/27/637/beach-bungalow-view-out-in-the-maldives-wallpaper-preview.jpg&quot;), #136c16ee;">
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 41px;">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;/assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4"><strong>Selamat Datang!</strong></h4>
                                    </div>
                                    <form class="user" action="/auth_konsumen" method="POST">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required autofocus></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="pass_konsumen" required autofocus></div>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Masuk</button>
                                        <hr>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="/forgot_password">Lupa Password?</a></div>
                                    <div class="text-center"><a class="small" href="/register">Belum akun? Daftar sekarang!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>