@extends('front.layouts.master')

@section('title') Hello World @endsection

@section('content')
<div class="row px-5">
    <div class="col-sm-6 col-lg-4 offset-sm-3 offset-lg-8">
        <div class="login-form shadow-sm">
            <div class="text-center">
                <div class="image-logo px-5 mb-1">
                    <img src="{{ asset('images/logo-usm.png') }}" alt="">
                </div>
                <p>Selamat datang di SIA USM</p>
            </div>
            <div class="px-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" class="form-control">
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
@endsection

@push('custom_styles')
<link rel="stylesheet" href="{{ asset('vendor/front/home.css') }}">
<style>
    body {
        background-image: url('{{ asset('images/leftside-background.jpg') }}');
    }
</style>
@endpush
