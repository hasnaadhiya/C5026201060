@extends('layout.bahagia')

@section('title', 'Data Absen')
@section('judulhalaman', 'Daftar Absen')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="/absen/add" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Absensi</a>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
            <form action="/absen/cari" method="GET">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="cari" placeholder="Cari nama pegawai.." value="{{ old('cari') }}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

</div>

	<br/>
	<br/>

	<table class="table table-hover table-bordered table-light align-middle">
		<tr class="text-center table-primary">

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td class="text-center">
                <a href="/absen/view/{{ $a->ID }}" class="btn btn-outline-primary">Detail</a>
                &nbsp;
                <a href="/absen/edit/{{ $a->ID }}" class="btn btn-outline-warning">Edit</a>
				&nbsp;
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        H : Hadir
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>
{{ $absen->links()}}
@endsection
