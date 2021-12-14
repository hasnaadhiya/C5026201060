@extends('layout.bahagia')

@section('title', 'Data Lipstick')
@section('judulhalaman', 'Tambah Lipstick')

@section('konten')
<div>
	<a href="/lipstick" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	<form action="/lipstick/store" method="post" class="table-responsive">
		{{ csrf_field() }}

        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">Kode</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="kode" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="merk" class="form-label">Merk</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" id="merk" name="merk" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="stock" class="form-label">Stock</label>
            </div>
            <div class="col-5">
                <input type="number" class="form-control" id="stock" name="stock" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">Tersedia</label>
            </div>
            <div class="col-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="Y" checked>
                    <label class="form-check-label" for="tersedia">
                      Ya
                    </label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tersedia" id="tidaktersedia" value="N">
                    <label class="form-check-label" for="tidaktersedia">
                      Tidak
                    </label>
                </div>

        <div >
            {{-- <div class="col-2"></div>
            <div class="col-5"> --}}
                <input class="btn btn-success mt-3" type="submit" value="Simpan Data">
            {{-- </div> --}}
        </div>


	</form>

@endsection
