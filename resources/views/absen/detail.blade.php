@extends('layout.bahagia')

@section('title', 'Data Absen')
@section('judulhalaman', 'Detail Absen')

@section('konten')
<div>
	<a href="/absen" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	@foreach($absen as $a)
        <div class="row mb-3">
            <div class="col-2">
                <label for="idpegawai" class="form-label">ID Pegawai</label>
            </div>
            <div class="col-5">
                {{ $a->IDPegawai }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="nama" class="form-label">Nama Pegawai</label>
            </div>
            <div class="col-5">
                {{ $a->pegawai_nama }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="tanggal" class="form-label">Tanggal</label>
            </div>
            <div class="col-5">
                {{ $a->Tanggal }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="status" class="form-label">Status</label>
            </div>
            <div class="col-5">
                {{ $a->Status }}
            </div>
        </div>

	@endforeach
@endsection
