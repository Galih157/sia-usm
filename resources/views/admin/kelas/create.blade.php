@extends('admin.layouts.master')

@section('title') Tambah Kelas @endsection

@section('content')
<div class="rounded-sm shadow-sm p-2">
    <div class="p-3">
        <h4 class="mb-3">Tambah Kelas</h4>
        <form action="{{ route('admin.kelas.create') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" id="hari" class="form-control @error('hari') is-invalid @enderror" required>
                            <option value="1">Senin</option>
                            <option value="2">Selasa</option>
                            <option value="3">Rabu</option>
                            <option value="4">Kamis</option>
                            <option value="5">Jumat</option>
                            <option value="6">Sabtu</option>
                            <option value="7">Minggu</option>
                        </select>
                        @error('hari')
                        <div class="text-danger validate-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="waktu">Jam</label>
                        <select name="waktu" id="waktu" class="form-control @error('waktu') is-invalid @enderror" required>
                            <option value="17:00">17:00</option>
                            <option value="18:20">18:20</option>
                            <option value="19:40">19:40</option>
                        </select>
                        @error('waktu')
                        <div class="text-danger validate-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id_prodi">Pilih Program Studi</label>
                        <select name="id_prodi" id="id_prodi" class="form-control @error('id_prodi') is-invalid @enderror" required>
                            @foreach($semua_prodi as $prodi)
                            <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_prodi')
                        <div class="text-danger validate-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id_dosen">Pilih Dosen</label>
                        <select name="id_dosen" id="id_dosen" class="form-control @error('id_dosen') is-invalid @enderror" required>
                            @foreach($semua_dosen as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_dosen')
                        <div class="text-danger validate-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="id_makul">Pilih Mata Kuliah</label>
                        <select name="id_makul" id="id_makul" class="form-control @error('id_makul') is-invalid @enderror" required>
                            @foreach($semua_makul as $makul)
                            <option value="{{ $makul->id }}">{{ $makul->kode }} - {{ $makul->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_makul')
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
