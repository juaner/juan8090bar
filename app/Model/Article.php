<?php
/**
 * Created by PhpStorm.
 * File: Article.php
 * User: liuyajuan
 * Date: 2017/9/5
 * Time: 下午5:39
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	// 表
	protected $table = 'article';

	// 主键
	protected $primaryKey = 'ctime';

	// 自动维护时间戳
	public $timestamps = false;


	public function getIndexData()
	{
		return $this->selectRaw('
						*
					')->where([
			['ctime', '>=', '2017-07-01'],
			['ctime', '<', '2017-08-01'],
		])->orderBy('ctime', 'desc')->limit(4)->get();

	}

	public function getTypeData($type)
	{
		return $this->selectRaw('
						title,
						ctime
					')->where([
			['ctime', '>=', '2017-07-01'],
			['ctime', '<', '2017-08-01'],
			['type', '=', $type],
		])->orderBy('ctime', 'desc')->limit(10)->get();
	}

	public function getTag(){
		//return $this->select('distinct(type)')->get();
	}


}