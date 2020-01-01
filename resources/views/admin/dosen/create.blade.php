@extends('admin.layouts.master')

@section('title') Tambah Dosen @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Tambah Dosen</h4>
        <form action="{{ route('admin.dosen.create') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" value="{{ old('nis') }}" class="form-control @error('nis') is-invalid @enderror" name="nis">
                @error('nis')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                @error('nama')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" required>
                @error('email')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" value="{{ old('password_confirmation') }}" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                @error('password_confirmation')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah Dosen</button>
            </div>
        </form>
    </div>
</div>
@endsection
