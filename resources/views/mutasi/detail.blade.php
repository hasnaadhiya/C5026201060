@extends('layout.bahagia')

@section('title', 'Data Mutasi')
@section('judulhalaman', 'Detail Mutasi')

@section('konten')
<div>
	<a href="/mutasi" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	@foreach($mutasi as $m)
        <div class="row mb-3">
            <div class="col-2">
                <label for="idpegawai" class="form-label">ID Pegawai</label>
            </div>
            <div class="col-5">
                {{ $m->ID }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="nama" class="form-label">Nama Pegawai</label>
            </div>
            <div class="col-5">
                {{ $m->pegawai_nama }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="departemen" class="form-label">Departemen</label>
            </div>
            <div class="col-5">
                {{ $m->Departemen }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="subdepartemen" class="form-label">SubDepartemen</label>
            </div>
            <div class="col-5">
               {{ $m->SubDepartemen }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="mulaibertugas" class="form-label">MulaiBertugas</label>
            </div>
            <div class="col-5">
              {{ $m->MulaiBertugas }}
            </div>
        </div>

	@endforeach
@endsection
