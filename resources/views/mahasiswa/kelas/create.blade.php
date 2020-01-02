@extends('mahasiswa.layouts.master')

@section('title') Tambah Kelas @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Tambah Kelas</h4>
        <form action="{{ route('mahasiswa.kelas.create') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id_kelas_dosen">Pilih Kelas</label>
                        <select name="id_kelas_dosen" id="id_kelas_dosen" class="form-control @error('id_kelas_dosen') is-invalid @enderror" required>
                            @foreach($semuaKelasDosen as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->makul['nama'] }} - {{ $kelas->dosen['nama'] }} - {{ $kelas->hari . ' ' . $kelas->waktu }}</option>
                            @endforeach
                        </select>
                        @error('id_kelas_dosen')
                        <div class="text-danger validate-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambah Kelas</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
