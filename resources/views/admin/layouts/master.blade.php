<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    @stack('custom_styles')
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.auth.logout') }}"><i class="fa fa-sign-out-alt"></i> Log out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row p-2">
        <div class="col-lg-2">
            <div class="side-nav rounded-sm shadow-sm p-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-archive"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.prodi.index') }}"><i class="fa fa-university"></i> Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user-tie"></i> Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.mahasiswa.index') }}"><i class="fa fa-user-graduate"></i> Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="container-fluid p-2">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    @stack('custom_scripts')
</body>

</html>
