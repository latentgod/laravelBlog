<?php
use Illuminate\Database\Seeder;
use App\Page;


class PageTableSeeder extends Seeder{
    public function run(){
        DB::table('pages')->delete();
        for($i=0;$i<=10;$i++){
            Page::create([
                'title'=>'title'.$i,
                'body'=>'body'.$i,
                'category'=>'category'.$i,
                'user_id'=>1,
                ]);
        
        
        }
        
    
    
    }



}







?>
