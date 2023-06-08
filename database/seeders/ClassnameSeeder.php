<?php

namespace Database\Seeders;

use App\Models\Classname;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassnameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classname::create([
            'class_name' => 'TI11'
        ]);

        Classname::create([
            'class_name' => 'TI12'
        ]);

        Classname::create([
            'class_name' => 'TI13'
        ]);

        Classname::create([
            'class_name' => 'SI11'
        ]);

        Classname::create([
            'class_name' => 'SI12'
        ]);

        Classname::create([
            'class_name' => 'TK11'
        ]);

        Classname::create([
            'class_name' => 'TK12'
        ]);
    }
}
