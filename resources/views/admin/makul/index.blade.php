@extends('admin.layouts.master')

@section('title') Data Makul @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="page-header p-3">
        <div class="d-flex justify-content-between">
            <h4>Data Makul</h4>
            <a href="{{ route('admin.makul.create') }}" class="btn btn-primary">Buat Baru</a>
        </div>
    </div>
    <div class="p-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Makul</th>
                    <th>Nama Makul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($makul as $no => $makul)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $makul->kode }}</td>
                    <td>{{ $makul->nama }}</td>
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
