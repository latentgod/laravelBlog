<?php
use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder{
    public function run(){
        DB::table('categories')->delete();
        for($i=0;$i<4;$i++){
            Category::create([
               'category'=> 'category'.$i,
                ]);
        
        } 
   
    
    }

}

?>








