<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Article;

class IndexController extends Controller{
	protected $article;

	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function Index(){
		$newData =$this->article->getIndexData();
		$tagData = $this->article->getTag();
		$data['new'] = $newData;
		$data['tag'] = $tagData;
		//print_r($data);
		return view('index', compact('data',$data));

	}

}