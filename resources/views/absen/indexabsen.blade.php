@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Daftar Absensi')

@section('konten')
<div>
	<a href="/absen/add" class="btn btn-primary my-2 mb-3"> + Tambah Absensi</a>
</div>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle text-center">
		<tr>

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
