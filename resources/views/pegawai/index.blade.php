@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Daftar Pegawai')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="/pegawai/tambah" class="btn btn-primary my-2 mb-3"> + Tambah Pegawai</a>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
            <form action="/pegawai/cari" method="GET">
                <div class="col-9">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">

                </div>
                <div class="col-3">
                    <input type="submit" class="btn btn-default" value="CARI">

                </div>
            </form>
        </div>
    </div>

</div>

    <div class="container" align="center">
    </div>

	<table class="table table-striped table-hover table-bordered align-middle text-center">
		<tr>
			<th>Nama</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th> --}}
			<th>Alamat</th>
			<th width=20%>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
        {{-- foreach khusus nampilin array  --}}
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> --}}
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-outline-primary">Detail</a>
                &nbsp;
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-outline-warning">Edit</a>
                &nbsp;
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- pagination --}}
    {{ $pegawai->links() }}

@endsection
