<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table pegawai
		$barang = DB::table('keranjangbelanja')->get();
    	// mengirim data pegawai ke view index
		return view('index2',['barang' => $barang]);
	}

    public function beli()
	{
		// memanggil view tambah
		return view('beli');
	}

    // method untuk insert data ke table keranjang belanja
	public function simpan(Request $request)
	{
		// insert data ke table keranjang belanja
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga,
		]);
		// alihkan halaman ke halaman keranjang belanja
		return redirect('/keranjangbelanja');

	}

    // method untuk hapus data
	public function batal($id)
	{
		// menghapus data barang berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
