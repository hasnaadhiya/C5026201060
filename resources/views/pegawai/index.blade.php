@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Daftar Pegawai')

@section('konten')

    <div>
        <a href="/pegawai/tambah" class="btn btn-primary my-2 mb-3"> + Tambah Pegawai</a>
    </div>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle text-center">

		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th width=20%>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
        {{-- foreach khusus nampilin array  --}}
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-outline-warning">Edit</a>
                &nbsp;
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
