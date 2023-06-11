@extends('main')

@section('container')
    <div class="px-4 sm:ml-64">
        <div class="px-4 pb-[30px] rounded-lg mt-14">
            <div class="grid gap-4">
                <div class="flex items-center justify-left h-24 rounded">
                    <p class="text-3xl text-black">Pendaftaran Dosen</p>
                </div>
            </div>
            {{-- progressbar --}}
            @include('components.stepper')
            
            <span id="pageValue" hidden>{{ $title }}</span>
            {{-- page 1 --}}
            <div class="page" id="page1">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_lengkap_dsn" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 alphabetValidation" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="gender_dsn" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                        <select id="gender_dsn" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                            <option value="" selected>Pilih Gender</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="tempat_lahir_dsn" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="tanggal_lahir_dsn" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div> 
                    <div>
                        <label for="ktp_dsn" class="block mb-2 text-sm font-medium text-gray-900">KTP</label>
                        <input type="text" id="ktp_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 numberValidation checkLength" maxlength="16" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                        <span id="confirmLengthKtp" class="font-medium mt-2 text-sm text-red-600" hidden>Format KTP salah! Silakan diperbaiki!</span>
                    </div>
                    <div>
                        <label for="agama_dsn" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                        <select id="agama_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="pendidikan_terakhir_dsn" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan Terakhir</label>
                        <select id="pendidikan_terakhir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" selected>Pilih Pendidikan Terakhir</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="sekolah_pt_dsn" class="block mb-2 text-sm font-medium text-gray-900">Sekolah Pendidikan Terakhir</label>
                        <input type="text" id="sekolah_pt_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="jurusan_pt_dsn" class="block mb-2 text-sm font-medium text-gray-900">Jurusan Pendidikan Terakhir</label>
                        <select id="jurusan_pt_dsn" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                            <option value="">Pilih Jurusan Pendidikan Terakhir</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="stts_dsn" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                        <select id="stts_dsn" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                            <option value="" selected>Pilih Status</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Janda/Duda">Janda/Duda</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="alamat_dsn" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input type="text" id="alamat_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="email_dsn" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="no_hp_dsn" class="block mb-2 text-sm font-medium text-gray-900">No Handphone</label>
                        <input type="text" id="no_hp_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 numberValidation checkLength" maxlength="15" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                        <span id="confirmLengthHp" class="font-medium mt-2 text-sm text-red-600" hidden>Format no handphone salah! Silakan diperbaiki!</span>
                    </div>
                    <div>
                        <label for="photo_dsn" class="block mb-2 text-sm font-medium text-gray-900">Foto (Maks 1 MB)</label>
                        <input id="photo_dsn" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" type="file" accept="image/jpg, image/jpeg, image/png" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                        <span id="confirmSizePhoto" class="font-medium mt-2 text-sm text-red-600" hidden>File foto lebih dari 1 MB!</span>
                    </div>
                </div>
            </div>

            {{-- page 2 --}}
            <div class="page" id="page2" hidden>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="program_studi_dsn" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                        <select id="program_studi_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" selected>Pilih Program Studi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="jabatan_dsn" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                        <select id="jabatan_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" selected>Pilih Jabatan</option>
                            <option value="Internship">Internship</option>
                            <option value="Staff">Staff</option>
                            <option value="Kaprodi">Kaprodi</option>
                        </select>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div>
                        <label for="tgl_bergabung_dsn" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Bergabung</label>
                        <input type="date" id="tgl_bergabung_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div class="relative">
                        <label for="password_dsn" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 absolute top-9 right-5 text-gray-400 transition duration-75 cursor-pointer group-hover:text-gray-900 checkPass" fill="currentColor"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                        <input type="password" id="password_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    </div>
                    <div class="relative">
                        <label for="konfirmasi_password_dsn" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 absolute top-9 right-5 text-gray-400 transition duration-75 cursor-pointer group-hover:text-gray-900 checkPass" fill="currentColor"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                        <input type="password" id="konfirmasi_password_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                        <span id="confirmPass" class="font-medium mt-2 text-sm text-red-600" hidden>Password baru tidak sama dengan konfirmasi password</span>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ $sendUrl }}" id="form_daftar_dsn" enctype="multipart/form-data">
                @csrf
                {{-- page 3 --}}
                <div class="page" id="page3" hidden>
                    <div>
                        <div>
                            <label for="photo_dsn_dis" class="block mb-2 text-sm font-medium text-gray-900">Foto</label>
                            <img id="photo_dsn_dis" class="h-auto max-w-lg rounded-lg mb-7" width="200" height="200">
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama_lengkap_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap_dsn_val" name="nama_lengkap_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="gender_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                            <input type="text" id="gender_dsn_val" name="gender_dsn_val" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="tempat_lahir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_dsn_val" name="tempat_lahir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="tanggal_lahir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_dsn_val" name="tanggal_lahir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div> 
                        <div>
                            <label for="ktp_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">KTP</label>
                            <input type="text" id="ktp_dsn_val" name="ktp_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="agama_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                            <input type="text" id="agama_dsn_val" name="agama_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="pendidikan_terakhir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan Terakhir</label>
                            <input type="text" id="pendidikan_terakhir_dsn_val" name="pendidikan_terakhir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="sekolah_pt_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Sekolah Pendidikan Terakhir</label>
                            <input type="text" id="sekolah_pt_dsn_val" name="sekolah_pt_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="jurusan_pt_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Jurusan Pendidikan Terakhir</label>
                            <input type="text" id="jurusan_pt_dsn_val" name="jurusan_pt_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="stts_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                            <input type="text" id="stts_dsn_val" name="stts_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="alamat_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                            <input type="text" id="alamat_dsn_val" name="alamat_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="email_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="text" id="email_dsn_val" name="email_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="no_hp_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">No Handphone</label>
                            <input type="text" id="no_hp_dsn_val" name="no_hp_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="program_studi_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                            <input type="text" id="program_studi_dsn_val" name="program_studi_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="jabatan_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                            <input type="text" id="jabatan_dsn_val" name="jabatan_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        <div>
                            <label for="tgl_bergabung_dsn_val" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Bergabung</label>
                            <input type="text" id="tgl_bergabung_dsn_val" name="tgl_bergabung_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" readonly>
                        </div>
                        {{-- hidden --}}
                        <input type="file" id="photo_dsn_val" name="photo_dsn_val" hidden>
                        <input type="hidden" id="password_dsn_val" name="password_dsn_val">
                    </div>

                    {{-- checklist --}}
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Semua data dosen yang diisi sudah benar.</label>
                    </div>
                </div>

                {{-- button --}}
                @include('components.next_prev_process_button')
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/alphabet_space_validation.js') }}"></script>
    <script src="{{ asset('js/number_validation.js') }}"></script>
    <script src="{{ asset('js/number_length_validation.js') }}"></script>
    <script src="{{ asset('js/photo_validation.js') }}"></script>
    <script src="{{ asset('js/hide_show_password.js') }}"></script>
    <script src="{{ asset('js/read_photo.js') }}"></script>
    <script src="{{ asset('js/admin/daftar_baru.js') }}"></script>
@endsection