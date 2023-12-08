@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h2>www.malasngoding.com</h2>
	<h3>Data Barang</h3>

	<a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli Barang Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($barang as $b)
		<tr>
            <td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang }}</td>
			<td>{{ $b->Jumlah }}</td>
			<td>{{ number_format($b->Harga,2,',','.'); }}</td>
            <td>{{ number_format($b->Harga * $b->Jumlah,2,',','.'); }}</td>
			<td>
				<a href="/keranjangbelanja/batal/{{ $b->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
