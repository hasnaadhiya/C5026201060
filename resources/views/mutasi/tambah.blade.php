@extends('layout.bahagia')

@section('title', 'Data Mutasi')
@section('judulhalaman', 'Tambah Mutasi')

@section('konten')
<div>
	<a href="/mutasi" class="btn btn-primary btn-sm my-2 mb-3"> < Kembali</a>
</div>

	<form action="/mutasi/store" method="post" class="table-responsive">
		{{ csrf_field() }}

        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">ID Pegawai</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="idpegawai" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">Departemen</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="departemen" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label class="form-label">SubDepartemen</label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="subdepartemen" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <div class="input-group mb-3">
                    <label class="form-label" for="datetimepicker1">Mulai Bertugas</label>
                </div>
            </div>
            <div class="col-5">
                <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                    <input id='datetimepicker1Input' type='text' class='form-control' name="mulaibertugas" data-td-target='#datetimepicker1' required/>
                    <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                        <span class='fas fa-calendar'></span>
                    </span>
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
