<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'material_name' => 'Bahasa Mandarin'
        ]);

        Material::create([
            'material_name' => 'Kalkulus I'
        ]);

        Material::create([
            'material_name' => 'Kalkulus II'
        ]);

        Material::create([
            'material_name' => 'Bahasa Inggris'
        ]);

        Material::create([
            'material_name' => 'Pemograman Basis Data'
        ]);

        Material::create([
            'material_name' => 'Pemograman Basis Web'
        ]);

        Material::create([
            'material_name' => 'Pemograman C++'
        ]);
    }
}
