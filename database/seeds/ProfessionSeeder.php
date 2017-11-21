<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
    //  DB::table('professions')->truncate();
        
        DB::table('professions')->insert([
            
            'title' => 'Desarrollador back-end',
        ]);
    }   
}   
    