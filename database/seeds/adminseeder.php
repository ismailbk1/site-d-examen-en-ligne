<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
[
"name" => "ismail",
"email" => "admin@admin.com ",
"role"=> "admin",
"password" => Hash::make("123456789"),

    
]

            
        );
    }
}