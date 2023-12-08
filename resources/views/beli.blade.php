@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Barang</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/keranjangbelanja/simpan" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kode" class="col-sm-1 col-form-label">Kode Barang:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="kode" name="kode">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-1 col-form-label">Jumlah:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-1 col-form-label">Harga:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
