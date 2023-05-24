<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rule::create([
            'rule_name' => 'admin'
        ]);

        Rule::create([
            'rule_name' => 'student'
        ]);

        Rule::create([
            'rule_name' => 'lecturer'
        ]);
    }
}
