@extends('admin.layouts.master')

@section('title') Data Dosen @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Data Dosen</h4>
            <a href="{{ route('admin.kelas.create') }}" class="btn btn-primary">Buat Baru</a>
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
                @foreach($semua_kelas as $no => $kelas)
                <tr>
                    <td>{{ $kelas->hari }}</td>
                    <td>{{ $kelas->waktu }}</td>
                    <td>{{ $kelas->makul['kode'] }}</td>
                    <td>{{ $kelas->makul['nama'] }}</td>
                    <td>{{ $kelas->dosen['nama'] }}</td>
                    <td>{{ $kelas->makul['sks'] }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('custom_scripts')
@if (session('status') && session('status')['success'])
<script>
    toastr.success("{{ session('status')['message'] }}");
</script>
@endif
@endpush
