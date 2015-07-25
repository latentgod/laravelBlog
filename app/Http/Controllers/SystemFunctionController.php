<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\System;
use Session;
use Redirect;

class SystemFunctionController extends Controller {


    public function update(Request $request,$id){
        $system = System::find($id);
        $system->webTitle = $request->input('webTitle');
        $system->keyword = $request->input('keyword');
        $system->phone = $request->input('phone');
        $system->company = $request->input('company');
        $system->record = $request->input('record');
        if($system->save()){
            Session::flash('alert-success', '保存成功');
            return Redirect::back();
        
        }else{
            Session::flash('alert-warning', '保存失败');
            return Redirect::to('manage/system');
        
        }
         
        
    
    
    
    
    
    }


}
