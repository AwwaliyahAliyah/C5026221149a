<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DVDController extends Controller
{
	public function homepagedvd()
	{
    	// mengambil data dari table dvd
        $dvd = DB::table('dvd')->paginate(10);
    	// mengirim data dvd ke view homepagedvd
		return view('homepagedvd',['dvd' => $dvd]);

	}

	// // method untuk menampilkan view form tambah dvd
	public function tambahdvd()
	{
		// memanggil view tambah
		return view('tambahdvd');
	}

	// // method untuk insert data ke table dvd
	public function simpandvd(Request $request)
	{
		// insert data ke table dvd
		DB::table('dvd')->insert([
			'merkdvd' => $request->merk,
			'stockdvd' => $request->stock,
			'tersedia' => $request->status
		]);
		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}

	// // method untuk edit data dvd
	public function ubahdvd($id)
	{
		// mengambil data dvd berdasarkan id yang dipilih
		$dvd = DB::table('dvd')->where('kodedvd',$id)->get();
		// passing data dvd yang didapat ke view ubahdvd.blade.php
		return view('ubahdvd',['dvd' => $dvd]);
	}

	// // update data dvd
	public function updatedvd(Request $request)
	{
		// update data dvd
		DB::table('dvd')->where('kodedvd',$request->id)->update([
			'merkdvd' => $request->merk,
			'stockdvd' => $request->stock,
			'tersedia' => $request->status
		]);
		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}

	// // method untuk hapus data dvd
	public function hapusdvd($id)
	{
		// menghapus data dvd berdasarkan id yang dipilih
		DB::table('dvd')->where('kodedvd',$id)->delete();

		// alihkan halaman ke halaman dvd
		return redirect('/dvd');
	}
}
