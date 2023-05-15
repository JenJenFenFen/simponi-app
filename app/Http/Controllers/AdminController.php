<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AdminController extends Controller
{
    public function main() {
        return view('components.sidebars');
    }

    public function daftarMahasiswa() {
        return view('admin.daftar_mahasiswa', [
            "title" => "mahasiswa"
        ]);
    }

    public function daftarDosen() {
        return view('admin.daftar_dosen', [
            "title" => "dosen"
        ]);
    }
}