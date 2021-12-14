@extends('layout.bahagia')

@section('title', 'Data Mutasi')
@section('judulhalaman', 'Daftar Mutasi')

@section('konten')

<div>
	<a href="/mutasi/tambah" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Data Mutasi Baru</a>
</div>

	<br/>
	<br/>

	<table class="table table-hover table-bordered table-light align-middle">
		<tr class="text-center table-primary">
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>Mulai Bertugas</th>
			<th width=20%>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td >{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-outline-warning">Edit</a>
				&nbsp;
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
