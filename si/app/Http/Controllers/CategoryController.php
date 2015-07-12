<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use App\Category;
use Session;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getData(Request $request)
	{
         $id = $request->input('id');
         $category = Category::find($id)->category;
         $response = array('category' => $category);
         return Response::json($response);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Request $request,$id)
	{


        $id = $request->input('id');
        $category = Category::find($id);
        $category->category = $request->input('category');

        if ($category->save()) {
          //  return Redirect::to('manage');
            Session::flash('alert-success', '修改成功');
        } else {
            Session::flash('alert-warning', '修改失败');
           // return Redirect::back()->withInput()->withErrors('保存失败！');
        }

        
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
