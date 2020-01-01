@extends('admin.layouts.master')

@section('title') Tambah Makul @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Tambah Makul</h4>
        <form action="{{ route('admin.makul.create') }}" method="post">
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
                <label for="sks">Jumlah SKS</label>
                <input type="text" value="{{ old('sks') }}" class="form-control @error('sks') is-invalid @enderror" name="sks" required>
                @error('sks')
                <div class="text-danger validate-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah Makul</button>
            </div>
        </form>
    </div>
</div>
@endsection
