<?php
use Illuminate\Database\Seeder;
use App\System;

class SystemTableSeeder extends Seeder{

    public function run(){
        DB::table('systems')->delete();
        System::create([
            'webTitle'=>'sisi',
            'keyword'=>'siblog',
            'company'=>'sicompany',
            'phone'=>'si88888',
            'record'=>'si110',
            ]);

    
    
    
    
    }



}







?>
