<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
    public function halamanchat()
	{
		// mengambil data dari table chat
		$chat = DB::table('chat')->get();
		// mengirim data chat ke view halamanchat
		return view('halamanchat',['chat' => $chat]);
	}
}
