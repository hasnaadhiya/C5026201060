@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
<div>
	<a href="/pegawai" class="btn btn-primary my-2 mb-3"> < Kembali</a>
</div>

	@foreach($pegawai as $p)
        <div class="row mb-3">
            <div class="col-2">
                <label for="nama" class="form-label">Nama</label>
            </div>
            <div class="col-5">
                {{ $p->pegawai_nama }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="jabatan" class="form-label">Jabatan</label>
            </div>
            <div class="col-5">
                {{ $p->pegawai_jabatan }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="umur" class="form-label">Umur</label>
            </div>
            <div class="col-5">
               {{ $p->pegawai_umur }}"
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <div class="col-5">
              {{ $p->pegawai_alamat }}
            </div>
        </div>

	@endforeach
@endsection
