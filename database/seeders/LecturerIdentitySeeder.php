<?php

namespace Database\Seeders;

use App\Models\LecturerIdentity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LecturerIdentity::create([
            'id_user_login' => 4,
            'nid' => '1110001',
            'name' => 'Derry Alamsyah',
            'gender' => 'Laki-Laki',
            'country' => 'Palembang',
            'date_birth' => '1992-09-21',
            'religion' => 'Islam',
            'ktp' => '1239809808098808',
            'address' => 'Jl. Merdeka No. 15',
            'status' => 'Menikah',
            'number_phone' => '087654637816',
            'email' => 'derryalam@gmail.com',
            'last_education' => 'S3',
            'major_last_education' => 'Teknik Komputer',
            'school_last_education' => 'Multi Data Palembang',
            'division' => 'Teknik Informatika',
            'position' => 'Staff',
            'date_join' => '2023-06-10',
            'photo' => 'dosen/1110001/1sXSRkQngK6De0Nk0MQmBZcOoGoa5MhQaVGicqVZ.jpg'
        ]);

        LecturerIdentity::create([
            'id_user_login' => 5,
            'nid' => '1110002',
            'name' => 'Tinalia',
            'gender' => 'Perempuan',
            'country' => 'Palembang',
            'date_birth' => '1956-08-15',
            'religion' => 'Kristen',
            'ktp' => '1671546389050009',
            'address' => 'Jl. Rupit 10',
            'status' => 'Menikah',
            'number_phone' => '087439386109',
            'email' => 'tinalia@gmail.com',
            'last_education' => 'S2',
            'major_last_education' => 'Teknik Informatika',
            'school_last_education' => 'Multi Data Palembang',
            'division' => 'Sistem Informasi',
            'position' => 'Staff',
            'date_join' => '2023-06-10',
            'photo' => 'dosen/1110002/UM3GcRYifjacZdvMB24KejBkoYpGrrRcptjfkn2z.jpg'
        ]);

        LecturerIdentity::create([
            'id_user_login' => 6,
            'nid' => '1110003',
            'name' => 'Timotius',
            'gender' => 'Laki-Laki',
            'country' => 'Palembang',
            'date_birth' => '1956-10-31',
            'religion' => 'Buddha',
            'ktp' => '1671548797280001',
            'address' => 'Jl. Binadawati No. 09',
            'status' => 'Menikah',
            'number_phone' => '081235678234',
            'email' => 'timotiusa@gmail.com',
            'last_education' => 'S2',
            'major_last_education' => 'Sistem Informasi',
            'school_last_education' => 'Multi Data Palembang',
            'division' => 'Teknik Komputer',
            'position' => 'Staff',
            'date_join' => '2023-06-10',
            'photo' => 'dosen/1110003/tsLRsO49JjqJGDkvezGTuNXLNCSrhQumLjSsnK1z.jpg'
        ]);
    }
}
