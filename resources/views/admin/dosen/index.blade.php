@extends('admin.layouts.master')

@section('title') Data Dosen @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Data Dosen</h4>
            <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_dosen as $dosen)
                <tr>
                    <td>{{ $dosen->nis }}</td>
                    <td>{{ $dosen->nama }}</td>
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
