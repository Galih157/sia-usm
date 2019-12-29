@extends('admin.layouts.master')

@section('title') Data Mahasiswa @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Data Mahasiswa</h4>
            <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mahas)
                <tr>
                    <td>{{ $mahas->nim }}</td>
                    <td>{{ $mahas->nama }}</td>
                    <td>{{ $mahas->nim }}</td>
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
