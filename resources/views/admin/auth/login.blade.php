<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/login.css') }}">
    @stack('custom_styles')
</head>

<body>

    <div class="container-fluid py-2">
        <div class="row px-5">
            <div class="col-sm-6 col-lg-4 offset-sm-3 offset-lg-4">
                <div class="login-form shadow-sm">
                    <div class="text-center">
                        <div class="image-logo px-5 mb-1">
                            <img src="{{ asset('images/logo-usm.png') }}" alt="">
                        </div>
                        <p>Selamat datang di SIA USM</p>
                    </div>
                    <div class="px-4">
                        <form action="{{ route('admin.auth.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('custom_scripts')
</body>

</html>
