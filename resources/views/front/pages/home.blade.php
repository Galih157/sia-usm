@extends('front.layouts.master')

@section('title') Hello World @endsection

@section('content')
<div class="row px-5">
    <div class="col-sm-6 col-lg-4 offset-sm-3 offset-lg-8">
        @auth('mahasiswa')
        <div class="login-form shadow-sm">
            <div class="text-center">
                <div class="image-logo px-5 mb-1">
                    <img src="{{ asset('images/logo-usm.png') }}" alt="">
                </div>
                <p>Selamat datang {{ auth('mahasiswa')->user()->nama }}</p>
            </div>
            <div class="px-4 pb-4">
                <a href="{{ route('mahasiswa.dashboard') }}" class="btn btn-primary btn-block">Ke Dashboard</a>
            </div>
        </div>
        @endauth

        @guest('mahasiswa')
        <div class="login-form shadow-sm">
            <div class="text-center">
                <div class="image-logo px-5 mb-1">
                    <img src="{{ asset('images/logo-usm.png') }}" alt="">
                </div>
                <p>Selamat datang di SIA USM</p>
            </div>
            <div class="px-4">
                <form action="{{ route('mahasiswa.auth.login') }}" method="post">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @csrf
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
        @endguest
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
