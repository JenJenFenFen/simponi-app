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
            'id_user_login' => 1,
            'nim' => '2023250001',
            'name' => 'Jennyver Seztiani Luxman',
            'gender' => 'Perempuan',
            'country' => 'Palembang',
            'date_birth' => '1996-09-21',
            'religion' => 'Kristen',
            'ktp' => '167102610996007',
            'address' => 'Jl. KHA Rasyid Siddik No. 11',
            'status' => 'Belum Menikah',
            'number_phone' => '082282017085',
            'email' => 'fenjenjen@gmail.com',
            'last_education' => 'SMA/SMK',
            'major_last_education' => 'IPA',
            'school_last_education' => 'Xaverius 3 Palembang',
            'major' => 'Teknik Informatika',
            'study_program' => 'S1',
            'semester' => '1',
            'academic_year' => '2023',
            'photo' => 'mahasiswa/2023250001/T1ZEs5KaL8gkZ9EZZUCXkrlNdLfNGRSXHfVhwI9N.jpg'
        ]);

        StudentIdentity::create([
            'id_user_login' => 2,
            'nim' => '2023250002',
            'name' => 'Jefry',
            'gender' => 'Laki-Laki',
            'country' => 'Palembang',
            'date_birth' => '1997-03-11',
            'religion' => 'Buddha',
            'ktp' => '1671110319970005',
            'address' => 'Jl. Cinde No. 20',
            'status' => 'Belum Menikah',
            'number_phone' => '081965378903',
            'email' => 'jefryofficial@gmail.com',
            'last_education' => 'SMA/SMK',
            'major_last_education' => 'IPA',
            'school_last_education' => 'Xaverius 1 Palembang',
            'major' => 'Teknik Informatika',
            'study_program' => 'S1',
            'semester' => '1',
            'academic_year' => '2023',
            'photo' => 'mahasiswa/2023250002/LPOY94CoPMz87dlKyK5u7X8NeuRyVVX3aH57Hinl.jpg'
        ]);

        StudentIdentity::create([
            'id_user_login' => 3,
            'nim' => '2023230001',
            'name' => 'Rexy Pradipta',
            'gender' => 'Laki-Laki',
            'country' => 'Palembang',
            'date_birth' => '1994-11-18',
            'religion' => 'Kristen',
            'ktp' => '1671181119940019',
            'address' => 'Jl. Angkatan 66',
            'status' => 'Belum Menikah',
            'number_phone' => '082278657839',
            'email' => 'ezrarexy@gmail.com',
            'last_education' => 'SMA/SMK',
            'major_last_education' => 'Komputer',
            'school_last_education' => 'Negri 11 Palembang',
            'major' => 'Sistem Informasi',
            'study_program' => 'S1',
            'semester' => '1',
            'academic_year' => '2023',
            'photo' => 'mahasiswa/2023230001/JoG4OF1ygKjK6PXY5XDP7oDqRsuNxFwiQZgnmiz2.jpg'
        ]);
    }
}
