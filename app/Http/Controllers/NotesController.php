<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Article;


class NotesController extends Controller{
	protected $article;

	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function Index(){
		$data = $this->article->getTypeData('mysql');

		return view('notes', compact('data',$data));

	}

	public function Detail(){

	}
}