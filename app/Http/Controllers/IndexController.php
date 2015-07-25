<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;


use App\Page;
use App\Category;

class IndexController extends Controller {


	public function index()
	{
        // 为index传递一个表进去 也就是 withPages 中的Pages  可在模板下直接用Pages调用数据库的内容
        //而Pages  取得了数据库中pages中的所有内容 因为 Page:all()
        $Page_fen = Page::paginate(10);
        $category = Category::all();
		return view('index')->with(['pages'=>$Page_fen,'categorys'=>$category]);
	}

}
