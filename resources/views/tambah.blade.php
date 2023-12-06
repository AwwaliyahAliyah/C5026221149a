@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Nama:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Umur:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="umur">
            </div>
        </div>
		<div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label">Alamat:</label>
            <div class="col-sm-4">
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
