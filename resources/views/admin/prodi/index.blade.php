@extends('admin.layouts.master')

@section('title') Data Prodi @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Data Prodi</h4>
            <a href="{{ route('admin.prodi.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prodi as $no => $prod)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $prod->kode }}</td>
                    <td>{{ $prod->nama }}</td>
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
