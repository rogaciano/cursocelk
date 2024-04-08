<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (!Classe::where('name', 'Aula 1') {
            Classe::create([
                'name' => 'Aula 1',
                'description' => 'Descrição da aula 1',
                'course_id' => Course::where('name', 'Laravel 10 - T1')->first()->id
            ]);
        });
    }
}