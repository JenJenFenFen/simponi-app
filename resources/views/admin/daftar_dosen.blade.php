<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simponi</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('components.sidebars')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-black border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid gap-4">
                <div class="flex items-center justify-left h-24 rounded dark:bg-black">
                    <p class="text-3xl text-black dark:text-gray-500">Daftar Dosen</p>
                </div>
            </div>
            {{-- progressbar --}}
            @include('components.stepper')
            
            <form id="form_daftar_dsn">
                <div class="page" id="page1">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama_lengkap_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="tempat_lahir_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="tanggal_lahir_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div> 
                        <div>
                            <label for="ktp_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                            <input type="text" id="ktp_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="agama_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <select id="agama_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="" selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="pendidikan_terakhir_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan Terakhir</label>
                            <select id="pendidikan_terakhir_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="" selected>Pilih Pendidikan Terakhir</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="sekolah_pt_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah Pendidikan Terakhir</label>
                            <input type="text" id="sekolah_pt_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="kota_pt_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota Pendidikan Terakhir</label>
                            <input type="text" id="kota_pt_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="alamat_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" id="alamat_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="email_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="no_hp_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone</label>
                            <input type="text" id="no_hp_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="foto_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                    </div>
                </div>

                <div class="page" id="page2" hidden>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="program_studi_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
                            <select id="program_studi_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="" selected>Pilih Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="jabatan_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                            <select id="jabatan_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="" selected>Pilih Jabatan</option>
                                <option value="Internship">Internship</option>
                                <option value="Staff">Staff</option>
                                <option value="Kaprodi">Kaprodi</option>
                            </select>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="tgl_bergabung_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Bergabung</label>
                            <input type="date" id="tgl_bergabung_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div>
                            <label for="nid_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk Dosen</label>
                            <input type="text" id="nid_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" value="123" disabled readonly>
                        </div>
                        <div class="relative">
                            <label for="password_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 absolute top-9 right-5 text-gray-400 transition duration-75 cursor-pointer group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                            <input type="password" id="password_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                        <div class="relative">
                            <label for="konfirmasi_password_dsn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 absolute top-9 right-5 text-gray-400 transition duration-75 cursor-pointer group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                            <input type="password" id="konfirmasi_password_dsn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <span class="font-medium mt-2 text-sm text-red-600 dark:text-red-500" hidden>Masih kosong! Silakan diisi!</span>
                        </div>
                    </div>
                </div>

                <div class="page" id="page3" hidden>
                    <div>
                        <div>
                            <label for="foto_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                            <img class="h-auto max-w-lg rounded-lg mb-7" src="/docs/images/examples/image-1@2x.jpg" alt="image description">
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama_lengkap_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="tempat_lahir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="tanggal_lahir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div> 
                        <div>
                            <label for="ktp_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KTP</label>
                            <input type="text" id="ktp_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="agama_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <input type="text" id="agama_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="pendidikan_terakhir_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan Terakhir</label>
                            <input type="text" id="pendidikan_terakhir_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="sekolah_pt_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah Pendidikan Terakhir</label>
                            <input type="text" id="sekolah_pt_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="kota_pt_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota Pendidikan Terakhir</label>
                            <input type="text" id="kota_pt_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="alamat_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" id="alamat_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="email_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" id="email_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="no_hp_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone</label>
                            <input type="text" id="no_hp_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="program_studi_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
                            <input type="text" id="program_studi_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="jabatan_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                            <input type="text" id="jabatan_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="tgl_bergabung_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Bergabung</label>
                            <input type="text" id="tgl_bergabung_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                        <div>
                            <label for="nid_dsn_val" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk Dosen</label>
                            <input type="text" id="nid_dsn_val" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-not-allowed" disabled readonly>
                        </div>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua data dosen yang diisi sudah benar.</label>
                    </div>
                </div>

                {{-- button --}}
                @include('components.next_prev_process_button')
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/admin/daftar_baru.js') }}"></script>

</body>
</html>