@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')
<div>
	<a href="/pegawai" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="table-responsive">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="row mb-3">
            <div class="col-2">
                <label for="nama" class="form-label">Nama</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="jabatan" class="form-label">Jabatan</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="umur" class="form-label">Umur</label>
            </div>
            <div class="col-5">
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <div class="col-5">
                <textarea class="form-control" id="alamat" name="alamat" rows="2">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-5">
                <input class="btn btn-success" type="submit" value="Simpan Data">

            </div>
        </div>

	</form>
	@endforeach
@endsection
