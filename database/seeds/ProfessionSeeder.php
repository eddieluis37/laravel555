<?php

use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'Desarrollador back-end',
        ]);
    }   
}   
 