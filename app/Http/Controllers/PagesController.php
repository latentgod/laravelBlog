<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Page;
use App\Category;

class PagesController extends Controller {

	 
    // 显示页面
	public function show($id)
	{
        $category = Category::all();
        return view('pages.show')->with(['page'=>Page::find($id),'categorys'=>$category]);
	}
}
