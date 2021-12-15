@extends('layout.bahagia')

@section('title', 'Data Karyawan')
@section('judulhalaman', 'Tambah Karyawan')

@section('konten')
<div>
	<a href="/karyawan1" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	<form action="/karyawan1/store" method="post" class="table-responsive">
		{{ csrf_field() }}

        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">NIP</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="NIP" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="nama" class="form-label">Nama</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" id="nama" name="nama" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="pangkat" class="form-label">Pangkat</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" id="pangkat" name="pangkat" required></input>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="gaji" class="form-label">Gaji</label>
            </div>
            <div class="col-5">
                <input type="number" class="form-control" id="gaji" name="gaji"></input>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-5">
                <input class="btn btn-success" type="submit" value="Simpan Data">
            </div>
        </div>


	</form>

</body>
</html>
@endsection
