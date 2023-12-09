@extends('master2')
@section('judulhalaman', 'Data DVD')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data DVD</h3>

	<a href="/dvd"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/dvd/simpan" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk DVD:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock DVD:</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Tersedia:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="status" name="status">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
