@extends('main')

@section('container')
    <div class="px-4 sm:ml-64">
        <div class="px-4 pb-[30px] mt-14">
            <div class="grid gap-4">
                <div class="flex items-center justify-left h-24 rounded">
                    <p class="text-3xl text-black">Pendaftaran Jadwal</p>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 mb-6">
                <div class="col-start-1 col-end-3">
                    <label for="nama_kelas" class="block mb-2 text-sm font-medium text-gray-900">Nama Kelas</label>
                    <select id="nama_kelas" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih kelas</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                </div>
                <div class="col-start-3 col-end-6">
                    <label for="nama_material" class="block mb-2 text-sm font-medium text-gray-900">Nama Mata Kuliah</label>
                    <select id="nama_material" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih mata kuliah</option>
                        @foreach ($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                        @endforeach
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                </div>
                <div class="col-start-6 col-end-9">
                    <label for="nama_dosen" class="block mb-2 text-sm font-medium text-gray-900">Nama Dosen</label>
                    <select id="nama_dosen" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih dosen</option>
                        @foreach ($lecturers as $lecturer)
                            <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                        @endforeach
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                </div>
                <div class="col-start-9 col-end-11">
                    <label for="hari" class="block mb-2 text-sm font-medium text-gray-900">Hari</label>
                    <select id="hari" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih hari</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                </div>
                <div class="col-start-11 col-end-13">
                    <label for="jam" class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                    <select id="jam" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih jam</option>
                        <option value="08.00">08.00</option>
                        <option value="10.00">10.00</option>
                        <option value="14.00">14.00</option>
                        <option value="16.00">16.00</option>
                        <option value="19.00">19.00</option>
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                </div>
                <div class="col-start-1 col-end-13">
                    <span id="confirmSameJadwal" class="font-medium mt-2 text-sm text-red-600" hidden>Jadwal yang sama sudah ada di tabel! Silakan diperbaiki!</span>
                </div>
            </div>
            <div>
                <button type="button" id="btnAdd" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
            </div>

            
            <div class="relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <caption class="text-lg font-medium text-gray-900 my-4">List Tambah Jadwal</caption>
                    <thead class="text-xs text-center text-white uppercase bg-gray-500">
                        <tr>
                            <th scope="col" class="py-3" hidden>
                                No
                            </th>
                            <th scope="col" class="py-3">
                                No
                            </th>
                            <th scope="col" class="py-3">
                                Nama Kelas
                            </th>
                            <th scope="col" class="py-3">
                                Nama Mata Kuliah
                            </th>
                            <th scope="col" class="py-3">
                                Nama Dosen
                            </th>
                            <th scope="col" class="py-3">
                                Hari
                            </th>
                            <th scope="col" class="py-3">
                                Jam
                            </th>
                            <th scope="col" class="py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="editCol">
                        <tr id="zeroContent" class="bg-white text-black border-b hover:bg-gray-300">
                            <td colspan="7" class="py-2 text-center">
                                Kosong
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- form --}}
            <form method="POST" action="{{ $sendUrl }}" id="form_daftar_mahasiswa_kelas" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="jadwal_val" name="jadwal_val">
                {{-- checklist --}}
                <div class="flex items-start mt-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" class="w-4 h-4 border rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required disabled>
                    </div>
                    <label id="rememberLabel" for="remember" class="ml-2 text-sm font-medium text-gray-200">Semua data yang diisi sudah benar.</label>
                </div>
                <button type="submit" id="btnProcess" class="mt-8 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-gray-200 cursor-not-allowed" disabled>Proses</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/admin/daftar_jadwal.js') }}"></script>
@endsection