<?php

namespace App\Http\Controllers;

use App\Models\LecturerIdentity;
use App\Models\StudentIdentity;
use App\Models\UserLogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CodeMhs {
    private $code;

    public function __construct($jurusan) {
        $this->setCode($jurusan);
    }

    private function setCode($jurusan) {
        $jurusanCode = [
            "Teknik Informatika" => '25',
            "Sistem Informasi" => '23',
            "Teknik Komputer" => '26'
        ];

        $this->code = $jurusanCode[$jurusan];
    }

    public function getCode() {
        return $this->code;
    }
}

class AdminController extends Controller
{
    public function main() {
        return view('components.sidebars');
    }

    public function daftarMahasiswa() {
        $sendUrl = route('sendMahasiswa');

        return view('admin.daftar_mahasiswa', [
            "title" => "mahasiswa",
            "sendUrl" => $sendUrl
        ]);
    }

    public function sendMahasiswa(Request $request) {
        $login = new UserLogin();

        $login->email = $request->email_mhs_val;
        $login->password = Crypt::encryptString($request->password_mhs_val);
        $login->id_rule = '2';
        $login->save();

        // get id for id_user_login
        $id_login_raw = DB::table('user_logins')->select('id')->where('email', $request->email_mhs_val)->get();
        $id_login = json_decode($id_login_raw, true)[0]['id'];

        // create nim
        $year = date('Y');
        $codeMajor = (new CodeMhs($request->jurusan_mhs_val))->getCode();
        $count = DB::table('student_identities')->where('major', $request->jurusan_mhs_val)->count() + 1;
        $nim = (intval($year . $codeMajor) * 10000) + $count;

        $mahasiswa = new StudentIdentity();

        $mahasiswa->id_user_login = $id_login;
        $mahasiswa->nim = $nim;
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
        $mahasiswa->school_last_education = $request->sekolah_pt_mhs_val;
        $mahasiswa->major_last_education = $request->jurusan_pt_mhs_val;
        $mahasiswa->major = $request->jurusan_mhs_val;
        $mahasiswa->study_program = $request->jenjang_mhs_val;
        $mahasiswa->semester = $request->semester_mhs_val;
        $mahasiswa->academic_year = $request->tahun_ajaran_mhs_val;
        $mahasiswa->photo = $request->photo_mhs_val->store('mahasiswa/' . $nim);
        $mahasiswa->save();

        return redirect()->route('daftarMahasiswa');
    }

    public function daftarDosen() {
        $sendUrl = route('sendDosen');

        return view('admin.daftar_dosen', [
            "title" => "dosen",
            "sendUrl" => $sendUrl 
        ]);
    }

    public function sendDosen(Request $request) {
        $login = new UserLogin();

        $login->email = $request->email_dsn_val;
        $login->password = Crypt::encryptString($request->password_dsn_val);
        $login->id_rule = '3';
        $login->save();

        // get id for id_user_login
        $id_login_raw = DB::table('user_logins')->select('id')->where('email', $request->email_dsn_val)->get();
        $id_login = json_decode($id_login_raw, true)[0]['id'];

        // create nid
        $count = DB::table('lecturer_identities')->count() + 1;
        $nid = (111 * 10000) + $count;

        $dosen = new LecturerIdentity();

        $dosen->id_user_login = $id_login;
        $dosen->nid = $nid;
        $dosen->name = $request->nama_lengkap_dsn_val;
        $dosen->gender = $request->gender_dsn_val;
        $dosen->country = $request->tempat_lahir_dsn_val;
        $dosen->date_birth = $request->tanggal_lahir_dsn_val;
        $dosen->religion = $request->agama_dsn_val;
        $dosen->ktp = $request->ktp_dsn_val;
        $dosen->address = $request->alamat_dsn_val;
        $dosen->status = $request->stts_dsn_val;
        $dosen->number_phone = $request->no_hp_dsn_val;
        $dosen->email = $request->email_dsn_val;
        $dosen->last_education = $request->pendidikan_terakhir_dsn_val;
        $dosen->school_last_education = $request->sekolah_pt_dsn_val;
        $dosen->major_last_education = $request->jurusan_pt_dsn_val;
        $dosen->division = $request->program_studi_dsn_val;
        $dosen->position = $request->jabatan_dsn_val;
        $dosen->date_join = $request->tgl_bergabung_dsn_val;
        $dosen->photo = $request->photo_dsn_val->store('dosen/' . $nid);
        $dosen->save();

        return redirect()->route('daftarDosen');
    }

    public function daftarKelas () {
        return view('admin.daftar_kelas');
    }
}