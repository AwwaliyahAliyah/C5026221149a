@extends('master2')
@section('judulhalaman', 'Data DVD')

@section('konten')
    <h2>www.malasngoding.com</h2>
	<h3>Data DVD</h3>

	<a href="/dvd/tambah" class="btn btn-primary"> + Tambah DVD Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode DVD</th>
			<th>Merk DVD</th>
			<th>Stock DVD</th>
			<th>Tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($dvd as $d)
		<tr>
			<td>{{ $d->kodedvd }}</td>
			<td>{{ $d->merkdvd }}</td>
			<td>{{ $d->stockdvd }}</td>
			<td>{{ $d->tersedia }}</td>
			<td>
				<a href="/dvd/edit/{{ $d->kodedvd }}" class="btn btn-warning">Edit</a>
				|
				<a href="/dvd/hapus/{{ $d->kodedvd }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$dvd->links()}}

@endsection
