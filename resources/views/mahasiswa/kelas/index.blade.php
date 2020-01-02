@extends('mahasiswa.layouts.master')

@section('title') Jadwal Kuliah @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Jadwal Kuliah</h4>
            <a href="{{ route('mahasiswa.kelas.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Kode MK</th>
                    <th>Nama Makul</th>
                    <th>Nama Dosen</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semuaKelas as $no => $kelas)
                <tr>
                    <td>{{ $kelas->kelas->hari }}</td>
                    <td>{{ $kelas->kelas->waktu }}</td>
                    <td>{{ $kelas->kelas->makul['kode'] }}</td>
                    <td>{{ $kelas->kelas->makul['nama'] }}</td>
                    <td>{{ $kelas->kelas->dosen['nama'] }}</td>
                    <td>{{ $kelas->kelas->makul['sks'] }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
