@extends('layout.bahagia')

@section('title', 'Data Lipstick')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')
<div>
	<a href="/lipstick" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	@foreach($lipstick as $l)
        <div class="row mb-3">
            <div class="col-2">
                <label for="kode" class="form-label">Kode</label>
            </div>
            <div class="col-5">
                {{ $l->kodelipstick }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="merk" class="form-label">Merk</label>
            </div>
            <div class="col-5">
                {{ $l->merklipstick }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="stock" class="form-label">Stock</label>
            </div>
            <div class="col-5">
               {{ $l->stocklipstick }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="tersedia" class="form-label">Tersedia</label>
            </div>
            <div class="col-5">
              {{ $l->tersedia }}
            </div>
        </div>

	@endforeach
@endsection
