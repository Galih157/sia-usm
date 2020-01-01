@extends('admin.layouts.master')

@section('title') Tambah Prodi @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Tambah Prodi</h4>
        <form action="{{ route('admin.prodi.create') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" value="{{ old('kode') }}" class="form-control @error('kode') is-invalid @enderror" name="kode">
                @error('kode')
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
                <button type="submit" class="btn btn-primary">Tambah Prodi</button>
            </div>
        </form>
    </div>
</div>
@endsection
