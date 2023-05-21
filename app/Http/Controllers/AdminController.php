<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    public function fetchMahasiswa(Request $request) {
        $jurusan = $request->input('jurusan');
        $students = DB::table('student_identities')->where('major', $jurusan)->count();

        return $students;
    }

    public function sendMahasiswa(Request $request) {
        dd($request);
    }

    public function daftarDosen() {
        return view('admin.daftar_dosen', [
            "title" => "dosen"
        ]);
    }
}