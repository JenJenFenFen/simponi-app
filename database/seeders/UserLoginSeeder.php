<?php

namespace Database\Seeders;

use App\Models\UserLogin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UserLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserLogin::create([
            'email' => 'fenjenjen@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 2
        ]);

        UserLogin::create([
            'email' => 'jefryofficial@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 2
        ]);

        UserLogin::create([
            'email' => 'ezrarexy@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 2
        ]);

        UserLogin::create([
            'email' => 'derryalam@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 3
        ]);

        UserLogin::create([
            'email' => 'tinalia@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 3
        ]);

        UserLogin::create([
            'email' => 'timotiusa@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 3
        ]);

        UserLogin::create([
            'email' => 'jefryfernandes@gmail.com',
            'password' => Crypt::encryptString('selatpanjang'),
            'id_rule' => 2
        ]);
        
    }
}
