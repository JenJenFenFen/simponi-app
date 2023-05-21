<?php

namespace App\Http\Controllers;

use App\Models\StudentIdentity;
use App\Models\UserLogin;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
        $jurusan = $request->jurusan;
        $students = DB::table('student_identities')->where('major', $jurusan)->count();

        return $students;
    }

    public function sendMahasiswa(Request $request) {
        $login = new UserLogin();

        $login->email = $request->email_mhs_val;
        $login->password = Crypt::encryptString($request->password_mhs_val);
        $login->id_rule = '2';
        $login->save();

        $id_login = DB::table('user_logins')->select('id')->where('email', $request->email_mhs_val)->get();

        $mahasiswa = new StudentIdentity();

        $mahasiswa->id_user_login = $id_login;
        $mahasiswa->nim = $request->nim_mhs_val;
        $mahasiswa->name = $request->nama_lengkap_mhs_val;
        $mahasiswa->gender = $request->gender_mhs_val;
        $mahasiswa->country = $request->tempat_lahir_mhs_val;
        $mahasiswa->date_birth = $request->tanggal_lahir_mhs_val;
        $mahasiswa->religion = $request->agama_mhs_val;
        $mahasiswa->ktp = $request->ktp_mhs_val;
        $mahasiswa->address = $request->alamat_mhs_val;
        $mahasiswa->status = $request->stts_mhs_val;
        $mahasiswa->number_phone = $request->no_hp_mhs_val;
        $mahasiswa->email = $request->email_mhs_val;
        $mahasiswa->last_education = $request->pendidikan_terakhir_mhs_val;
        $mahasiswa->major_last_education = $request->jurusan_pt_mhs_val;
        $mahasiswa->major = $request->jurusan_mhs_val;
        $mahasiswa->study_program = $request->jenjang_mhs_val;
        $mahasiswa->semester = $request->semester_mhs_val;
        $mahasiswa->photo = $request->nim_mhs_val;
    }

    public function daftarDosen() {
        return view('admin.daftar_dosen', [
            "title" => "dosen"
        ]);
    }
}