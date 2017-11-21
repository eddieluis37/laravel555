<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        //  DB::table('professions')->truncate();
        
        DB::table('professions')->insert([
            
            'title' => 'Desarrollador back-end',
        ]);
    }   
}   
    