<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('loginn') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('loginn') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginn') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginn') }}/css/style.css">

    <title>Login Admin</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <img src="{{ asset('admin') }}/dist/img/logo.png" alt="Logo PONPES" width="75%"
                            class="img-fluid">
                    </center>
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Register</h3>
                                <p class="mb-4">Buat Akun Terlebih dahulu</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group first">
                                    <input id="name" type="text" class="form-control" name="name" required
                                        autocomplete="name" autofocus placeholder="Masukkan Nama Lengkap">
                                </div>
                                <div class="form-group first">
                                    <input input id="email" type="email" class="form-control" name="email"
                                        required autocomplete="email" autofocus placeholder="Masukkan Email">
                                </div>
                                <div class="form-group first">
                                    <input id="password" type="password" class="form-control" name="password" required
                                        autocomplete="new-password" autofocus placeholder="Masukkan Password">
                                </div>
                                <div class="form-group first">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" autofocus
                                        placeholder="Masukkan Ulang Password">
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <div class="col-12">
                                    <span>Sudah punya akun ? </span><a href="{{ route('login') }}"
                                        class="text-center">Login Disini</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('loginn') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('loginn') }}/js/popper.min.js"></script>
    <script src="{{ asset('loginn') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('loginn') }}/js/main.js"></script>
</body>

</html>
