@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Identitas Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<div class="card" style="max-width: 550px; border: 1px solid">
        <div class="row no-gutters">
            <div class="col-md-5" style="border-right: 1px solid">
                <img src="gambar4.jpg" class="card-img" alt="Foto Pegawai" style="padding: 10px">
            </div>
            <div class="col-md-7" style="padding: 5px">
                <div class="card-body">
                    <p>Nama: {{ $p->pegawai_nama }}</p>
                    <p>Jabatan: {{ $p->pegawai_jabatan }}</p>
                    <p>Umur: {{ $p->pegawai_umur }}</p>
                    <p>Alamat: {{ $p->pegawai_alamat }}</p>
                    <a href="/pegawai" class="btn btn-secondary">OK</a>
                </div>
            </div>
        </div>
    </div>
	@endforeach

@endsection
