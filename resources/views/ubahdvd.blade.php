@extends('master2')
@section('judulhalaman', 'Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit DVD</h3>

	<a href="/dvd"> Kembali</a>

	<br/>
	{{-- <br/> --}}

	@foreach($dvd as $d)
	<form action="/dvd/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->kodedvd }}"> <br/>
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk DVD:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $d->merkdvd }}" required="required">
            </div>
        </div>
		<div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock DVD:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $d->stockdvd }}" required="required">
            </div>
        </div>
		<div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Tersedia:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="status" name="status" value="{{ $d->tersedia }}" required="required">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
