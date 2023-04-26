<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

      <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('Assets/img/Logo.png')}}" type="image/x-icon">

    <!-- CSS Bootrap-->
    <link rel="stylesheet" href="{{ asset('Assets/Vendor/bootstrap-5.2/css/bootstrap.min.css')}}" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('Assets/Css/Login style/main.css')}}" />

    <!--Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Poppins:wght@400;600&family=Roboto&display=swap"
        rel="stylesheet">

</head>

<body>
    <section class="login d-flex justify-content-center justify-content-lg-between">
        <div class="login-left w-50 h-100 d-none d-lg-block">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-4">
                    <img src="{{ asset('Assets/img/login.png') }}" class="login-img">
                </div>
            </div>
        </div>
        <div class="login-right w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-lg-6">
                    <div class="header">
                        <div class="text-center">
                            <img src="{{ asset('Assets/img/Logo.png') }}" class="logo">
                            <h1 class="my-0 my-lg-3">WELCOME BACK!</h1>
                        </div>
                    </div>
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ session('loginError') }}
                    </div>
                    @endif
                    <form action="{{route('customer.login.authenticate')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="login-form d-flex flex-column gap-1 gap-lg-2 mt-2 mt-lg-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" autofocus required value="{{old('email')}}">
                            <div class="password-container">
                                <label for="password">Password</label>
                                <div class="pass-wrapper position-relative d-flex">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required value="{{old('password')}}">
                                    <i class="ri-eye-close-fill position-absolute pass-icon " onclick="pass()" id="pass-icon"></i>
                                    <!-- <img src="{{ asset('Assets/img/eye_slash.png') }}" onclick="pass()" class="pass-icon position-absolute" id="pass-icon"> -->
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-inline">Belum punya akun? <a href="{{route('regisPage')}}" class="d-inline text-decoration-none">Daftar</a></span>
                            </div>
                            <button class="login-btn mt-1 mt-lg-2" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Js -->
    <script src="{{ asset('Assets/Js/login script/script.js') }}"></script>
    
</body>

</html>