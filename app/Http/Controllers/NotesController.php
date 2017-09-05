<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NotesController extends Controller{
	public function Index(){
		return view('notes', compact('2'));

	}
}