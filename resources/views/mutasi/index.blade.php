@extends('layout.bahagia')

@section('title', 'Data Mutasi')
@section('judulhalaman', 'Daftar Mutasi')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="/mutasi/tambah" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Mutasi</a>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
            <form action="/mutasi/cari" method="GET">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="cari" placeholder="Cari nama pegawai / departemen.." value="{{ old('cari') }}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>

	<table class="table table-hover table-bordered table-light align-middle">
		<tr class="text-center table-primary">
			<th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td >{{ $m->pegawai_nama }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td class="text-center">
                <a href="/mutasi/view/{{ $m->ID }}" class="btn btn-outline-primary">Detail</a>
                &nbsp;
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-outline-warning">Edit</a>
				&nbsp;
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $mutasi->links() }}
@endsection
