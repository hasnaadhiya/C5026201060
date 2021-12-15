@extends('layout.bahagia')

@section('title', 'Data Karyawan')
@section('judulhalaman', 'Daftar Karyawan')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="/karyawan1/tambah" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Data</a>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
        </div>
    </div>

</div>

	<table class="table table-hover table-bordered table-light align-middle">
		<tr class="text-center table-primary">
			<th width="30%">NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th width="30%">Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
        {{-- foreach khusus nampilin array  --}}
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
            {{-- <td>{{ $k->Gaji }}</td> --}}
			<td class="text-center">
                {{-- <a href="/karyawan1/view/{{ $k->NIP }}" class="btn btn-outline-primary">Detail</a>
                &nbsp;
				<a href="/karyawan1/edit/{{ $k->NIP }}" class="btn btn-outline-warning">Edit</a>
                &nbsp; --}}
				<a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-outline-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- pagination
    {{ $karyawan1->links() }} --}}

@endsection
