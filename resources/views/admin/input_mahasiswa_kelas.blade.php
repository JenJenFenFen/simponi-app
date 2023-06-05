<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simponi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- sidebars --}}
    @include('components.sidebars')
    <div class="px-4 sm:ml-64">
        <div class="px-4 pb-[30px] mt-14">
            <div class="grid gap-4">
                <div class="flex items-center justify-left h-24 rounded">
                    <p class="text-3xl text-black">Pendaftaran Kelas Untuk Mahasiswa</p>
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
                <div class="col-start-3 col-end-7">
                    <label for="nama_mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Nama Mahasiswa</label>
                    <select id="nama_mahasiswa" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300" required>
                        <option value="">Pilih mahasiswa</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    <span id="confirmSameKelas" class="font-medium mt-2 text-sm text-red-600" hidden>Kelas dan Mahasiswa yang sama sudah ada di tabel! Silakan diperbaiki!</span>
                </div>
                <div class="mt-7">
                    <button type="button" id="btnAdd" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
                </div>
            </div>

            
            <div class="relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <caption class="text-lg font-medium text-gray-900 my-4">List Tambah Kelas untuk Mahasiswa</caption>
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
                                Nama Mahasiswa
                            </th>
                            <th scope="col" class="py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="editCol">
                        <tr id="zeroContent" class="bg-white text-black border-b hover:bg-gray-300">
                            <td colspan="4" class="py-2 text-center">
                                Kosong
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- form --}}
            <form method="POST" action="{{ $sendUrl }}" id="form_daftar_mahasiswa_kelas" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="nama_kelas_val" name="nama_kelas_val">
                <input type="hidden" id="nama_mahasiswa_val" name="nama_mahasiswa_val">
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
    <script src="{{ asset('js/admin/input_mahasiswa_kelas.js') }}"></script>

</body>
</html>