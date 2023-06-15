<?php

namespace App\Http\Controllers;

use App\Models\LecturerIdentity;
use App\Models\StudentIdentity;
use App\Models\Classname;
use App\Models\StudentClassname;
use App\Models\Material;
use App\Models\Schedule;
use App\Models\UserLogin;
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
        return view('main');
    }

    public function daftarMahasiswa() {
        $sendUrl = route('sendMahasiswa');

        return view('admin.daftar_mahasiswa', [
            "title" => "mahasiswa",
            "sendUrl" => $sendUrl
        ]);
    }

    public function sendMahasiswa(Request $request) {
        $login = new UserLogin;

        $login->email = $request->email_mhs_val;
        $login->password = Crypt::encryptString($request->password_mhs_val);
        $login->id_rule = '2';
        $login->save();

        // get id for id_user_login
        $id_login_raw = $login::select('id')->where('email', $request->email_mhs_val)->get();
        $id_login = json_decode($id_login_raw, true)[0]['id'];

        // create nim
        $year = date('Y');
        $codeMajor = (new CodeMhs($request->jurusan_mhs_val))->getCode();
        $count = StudentIdentity::where('major', $request->jurusan_mhs_val)->count() + 1;
        $nim = (intval($year . $codeMajor) * 10000) + $count;

        $mahasiswa = new StudentIdentity;

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
        $login = new UserLogin;

        $login->email = $request->email_dsn_val;
        $login->password = Crypt::encryptString($request->password_dsn_val);
        $login->id_rule = '3';
        $login->save();

        // get id for id_user_login
        $id_login_raw = $login::select('id')->where('email', $request->email_dsn_val)->get();
        $id_login = json_decode($id_login_raw, true)[0]['id'];

        // create nid
        $count = LecturerIdentity::count() + 1;
        $nid = (111 * 10000) + $count;

        $dosen = new LecturerIdentity;

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

    public function daftarMaterial () {
        $sendUrl = route('sendMaterial');

        return view('admin.daftar_material', [
            "sendUrl" => $sendUrl
        ]);
    }

    public function sendMaterial (Request $request) {
        $data = explode(',', $request->nama_material_val);

        foreach($data as $input) {
            Material::create([
                "material_name" => $input
            ]);
        }
        
        return redirect()->route('daftarMaterial');
    }

    public function daftarJadwal () {
        $sendUrl = route('sendJadwal');
        $class = StudentClassname::select('id_classname')->distinct()->get();
        $material = Material::select('id', 'material_name')->get();
        $lecturer = LecturerIdentity::select('id', 'name')->get();

        return view('admin.daftar_jadwal', [
            "sendUrl" => $sendUrl,
            "classes" => $class,
            "materials" => $material,
            "lecturers" => $lecturer
        ]);
    }

    public function sendJadwal (Request $request) {
        $data = json_decode($request->jadwal_val, true);

        foreach($data as $input) {
            Schedule::create([
                "id_lecturer_identity" => $input['lecturerNameVal'],
                "id_classname" => $input['classNameVal'],
                "id_material" => $input['materialNameVal'],
                "day" => $input['dayNameVal'],
                "clock" => $input['clockNameVal']
            ]);
        }
        
        return redirect()->route('daftarJadwal');
    }

    public function daftarKelas () {
        $sendUrl = route('sendKelas');

        return view('admin.daftar_kelas', [
            "sendUrl" => $sendUrl
        ]);
    }

    public function sendKelas (Request $request) {
        $data = explode(',', $request->nama_kelas_val);

        foreach($data as $input) {
            Classname::create([
                "class_name" => strtoupper($input)
            ]);
        }
        
        return redirect()->route('daftarKelas');
    }

    public function inputMahasiswaKelas () {
        $sendUrl = route('sendMahasiswaKelas');
        $class = Classname::select('id', 'class_name')->get();
        $student = StudentIdentity::select('id', 'name')->get();

        return view('admin.input_mahasiswa_kelas', [
            "sendUrl" => $sendUrl,
            "classes" => $class,
            "students" => $student
        ]);
    }

    public function sendMahasiswaKelas (Request $request) {
        $data = json_decode($request->mahasiswa_kelas_val, true);

        foreach($data as $input) {
            StudentClassname::create([
                "id_classname" => $input['classNameVal'],
                "id_student_identity" => $input['studentNameVal']
            ]);
        }
        
        return redirect()->route('inputMahasiswaKelas');
    }

    public function cekMahasiswa () {
        $sendUrl = route('fetchMahasiswa');
        
        return view('admin.cek_mahasiswa', [
            "sendUrl" => $sendUrl
        ]);
    }

    public function fetchMahasiswa (Request $request) {
        if ($request->ajax()) {
            if (isset($request->nim_mhs)) { // isset cek ada isi
                $mahasiswa = StudentIdentity::where('nim', ''. $request->nim_mhs .'')->get();
            }
            else {
                $mahasiswa = StudentIdentity::where('name', 'like', '%'. $request->nama_mhs .'%')->get();
            }
            return $mahasiswa;
        }
    }

    public function cekDosen () {
        $sendUrl = route('fetchDosen');
        
        return view('admin.cek_dosen', [
            "sendUrl" => $sendUrl
        ]);
    }

    public function fetchDosen (Request $request) {
        if ($request->ajax()) {
            if (isset($request->nid_dsn)) { // isset cek ada isi
                $dosen = LecturerIdentity::where('nid', ''. $request->nid_dsn .'')->get();
            }
            else {
                $dosen = LecturerIdentity::where('name', 'like', '%'. $request->nama_dsn .'%')->get();
            }
            return $dosen;
        }
    }
}