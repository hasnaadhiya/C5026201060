@extends('layout.bahagia')

@section('title', 'Data Absen')
@section('judulhalaman', 'Daftar Absen')

@section('konten')
<div>
	<a href="/absen/add" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Absensi</a>
</div>

	<br/>
	<br/>

	<table class="table table-hover table-bordered table-light align-middle">
		<tr class="text-center table-primary">

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th width=20%>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a href="/absen/edit/{{ $a->ID }}" class="btn btn-outline-warning">Edit</a>
				&nbsp;
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

@endsection
