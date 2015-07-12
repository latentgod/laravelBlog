<?php namespace App\Http\Controllers\manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Page;
use App\System;
use App\Category;
use Redirect;

class ManageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::to('manage/content');

	}

//content manage
	public function content()
    {
        $paging = Page::paginate(10);
        $Category = Category::all();
        return view('manage.content')->with(['pages'=>$paging,'categories'=>$Category]);
    
    
    
    }
//comments manage
	public function comments()
    {
        return view('manage.comments');
    
    }
//users manage
	public function users()
    {
        return view('manage.users');
    
    }

//system manage
	public function system()
    {
        $category = Category::all();

        $id =System::first()->id;
        $webTitle =System::first()->webTitle;
        $keyword =System::first()->keyword;
        $company =System::first()->company;
        $phone =System::first()->phone;
        $record =System::first()->record;
        return view('manage.system',compact('id','webTitle','keyword','company','phone','record'))->with('categories',$category);
    
    }
}
