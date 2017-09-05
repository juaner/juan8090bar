<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
	public function Index(){
		return view('index', compact('2'));

	}
}