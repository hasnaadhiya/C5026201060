
@extends('layout.bahagia')

@section('title', 'Mengedit Absensi')
@section('judulhalaman', 'Edit Absensi')

@section('konten')
<div>
	<a href="/absen" class="btn btn-primary my-2 mb-3"> < Kembali</a>
</div>

	@foreach($absen as $a)

	<form action="/absen/update" method="post" class="table-responsive">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">

        <div class="row mb-3">
            <div class="col-2">
                <label for="idpegawai" class="form-label">ID Pegawai</label>
            </div>
            <div class="col-5">
                <select  class="form-select" name="idpegawai" id="">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <div class="input-group mb-3">
                    <label class="form-label" for="datetimepicker1">Tanggal</label>
                </div>
            </div>
            <div class="col-5">
                <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                    <input id='datetimepicker1Input' type='text' class='form-control' name="tanggal" data-td-target='#datetimepicker1' value="{{ $a->Tanggal }}" required/>
                    <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                        <span class='fas fa-calendar'></span>
                    </span>
                </div>
            </div>
        </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <label class="form-label">Status</label>
                    </div>
                    <div class="col-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="hadir" value="H" @if ($a->Status === "H" ) checked @endif>
                            <label class="form-check-label" for="hadir">
                              Hadir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="izin" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                            <label class="form-check-label" for="izin">
                              Izin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="sakit" value="S" @if ($a->Status === "S" ) checked="checked" @endif>
                            <label class="form-check-label" for="sakit">
                              Sakit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="alpha" value="A" @if ($a->Status === "A" ) checked="checked" @endif>
                            <label class="form-check-label" for="alpha">
                              Alpha
                            </label>
                        </div>
                    </div>
                </div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-5">
                <input class="btn btn-success" type="submit" value="Simpan Data">

            </div>
        </div>
	</form>
	@endforeach
    <script>
        new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
            hooks: {
                inputFormat: (context, date) => {
                return moment(date).format('YYYY-MM-DD hh:mm:ss')
                }
            }
        });
    </script>

   @endsection
