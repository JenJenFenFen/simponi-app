<?php

namespace Database\Seeders;

use App\Models\StudentIdentity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentIdentity::create([
            'id_user_login' => ''
        ]);
    }
}
