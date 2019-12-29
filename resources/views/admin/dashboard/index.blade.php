@extends('admin.layouts.master')

@section('title') Dashboard @endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h3>Mahasiswa</h3>
                <p style="margin: 0;">Jumlah Mahasiswa : {{ $stats['mahasiswa'] }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-block btn-primary">Kelola Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h3>Dosen</h3>
                <p style="margin: 0;">Jumlah Dosen : {{ $stats['dosen'] }}</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-block btn-primary">Kelola Dosen</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h3>Prodi</h3>
                <p style="margin: 0;">Jumlah Prodi : {{ $stats['prodi'] }}</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-block btn-primary">Kelola Prodi</a>
            </div>
        </div>
    </div>
</div>
@endsection
