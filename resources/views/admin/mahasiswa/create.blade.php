@extends('admin.layouts.master')

@section('title') Tambah Mahasiswa @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Data Mahasiswa</h4>
        <form action="{{ route('admin.mahasiswa.create') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror" name="nim">
                @error('nim')
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
                <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
            </div>
        </form>
    </div>
</div>
@endsection
