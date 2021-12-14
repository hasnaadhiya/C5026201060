@extends('layout.bahagia')

@section('title', 'Data Lipstick')
@section('judulhalaman', 'Daftar Lipstick')

@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="/lipstick/tambah" class="btn btn-primary btn-sm my-2 mb-3"> + Tambah Lipstick</a>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
            <form action="/lipstick/cari" method="GET">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="cari" placeholder="Cari merk lipstick.." value="{{ old('cari') }}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

</div>

<table class="table table-hover table-bordered table-light align-middle">
    <tr class="text-center table-primary">
        <th>Kode</th>
        <th>Merk</th>
        <th>Stock</th>
        <th>Tersedia</th>
        <th width="30%">Opsi</th>
    </tr>
    @foreach($lipstick as $l)
    {{-- foreach khusus nampilin array  --}}
    <tr>
        <td>{{ $l->kodelipstick }}</td>
        <td>{{ $l->merklipstick }}</td>
        <td>{{ $l->stocklipstick }}</td>
        <td>{{ $l->tersedia }}</td>
        <td class="text-center">
            <a href="/lipstick/detail/{{ $l->kodelipstick }}" class="btn btn-outline-primary">Detail</a>
            &nbsp;
            <a href="/lipstick/edit/{{ $l->kodelipstick }}" class="btn btn-outline-warning">Edit</a>
            &nbsp;
            <a href="/lipstick/hapus/{{ $l->kodelipstick }}" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{-- pagination --}}
{{ $lipstick->links() }}

@endsection
