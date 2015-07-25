<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Page;
use Response;
use DB;
use Redirect; 
use Session;

class modalController extends Controller {

    //显示  返回ajax数据
	public function getData(Request $request)
	{
         $id = $request->input('id');
         $title = Page::find($id)->title;
         $body = Page::find($id)->body;
         $category = Page::find($id)->category;
         $response = array('title' => $title,'body'=>$body,'category'=>$category);
         return Response::json($response);
	}

    //新增 保存
	public function store(Request $request)
	{
        $page = new Page;
        $page->title = $request->input('title');
        $page->body = $request->input('contents');
        $page->category = $request->input('category');
        $page->user_id = 1;
        if($page->save()){
            Session::flash('alert-success', '新增成功');
        }else{
            Session::flash('alert-warning', '新增失败');
        
        }



	}

    //更新
    public function update(Request $request,$id)
	{


        $id = $request->input('id');
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->body = $request->input('contents');
        $page->category = $request->input('category');
        $page->user_id = 1;//Auth::user()->id;

        if ($page->save()) {
          //  return Redirect::to('manage');
            Session::flash('alert-success', '编辑成功');
        } else {
            Session::flash('alert-warning', '编辑失败');
           // return Redirect::back()->withInput()->withErrors('保存失败！');
        }

        
	}

    //删除
	public function destroy($id)
	{
        if(Page::find($id)->delete()){
        Session::flash('alert-success', '删除成功');
        return Redirect::to('manage/content');
        }else{
            Session::flash('alert-warning', '删除失败');
        }
	}

}
