<?php namespace App\Http\Controllers;
use App\Page;

class WelcomeController extends Controller {

/*	public function __construct()
	{
		$this->middleware('guest');
	}
 */
    // 方法index
	public function index()
	{
        // 为index传递一个表进去 也就是 withPages 中的Pages  可在模板下直接用Pages调用数据库的内容
        //而Pages  取得了数据库中pages中的所有内容 因为 Page:all()
        $Page_fen = Page::paginate(10);
		return view('index')->with('pages',$Page_fen);
	}

}
