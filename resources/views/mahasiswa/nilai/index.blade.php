@extends('mahasiswa.layouts.master')

@section('title') Nilai Mahasiswa @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Nilai Mahasiswa</h4>
            <a href="{{ route('mahasiswa.kelas.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Makul</th>
                    <th>Nama Dosen</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">Sepertinya nilai masih kosong</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
