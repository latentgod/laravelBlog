<?php
use  Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        User::create([
            'email'=>'123@123.com',
            'password'=>Hash::make('123'),
            ]) ;
    
    
    
    
    }




}






?>
