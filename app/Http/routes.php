<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
  ]);

Route::get('pages/{id}','PagesController@show');

//----后台----
Route::group(['prefix'=>'manage','namespace'=>'manage','middleware'=>'auth'],function(){
    Route::get('/','ManageController@index');
    Route::get('content','ManageController@content');
    Route::get('comments','ManageController@comments');
    Route::get('users','ManageController@users');
    Route::get('system','ManageController@system');
});
Route::resource('manage/system/update','SystemFunctionController');

//模态框取数据
Route::post('modal/show','modalController@getData');//显示 ajax
Route::resource('modal/delete','modalController');
Route::resource('modal/save','modalController');//保存 ajax
Route::POST('modal/update/{id}','modalController@update');// 更新ajax

//categoryTable
Route::post('category/show','CategoryController@getData');//显示 ajax
Route::resource('category/delete','CategoryController');
Route::resource('category/save','CategoryController');//保存 ajax
Route::POST('category/update/{id}','CategoryController@update');// 更新ajax






