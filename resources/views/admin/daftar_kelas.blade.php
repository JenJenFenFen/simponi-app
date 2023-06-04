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
                    <p class="text-3xl text-black">Pendaftaran Kelas</p>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 mb-6">
                <div class="col-start-1 col-end-4">
                    <label for="nama_kelas" class="block mb-2 text-sm font-medium text-gray-900">Nama Kelas</label>
                    <input type="text" id="nama_kelas" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 uppercase border-gray-300" maxlength="4" placeholder="Contoh: TI11, SI12, TK23">
                    <span class="font-medium mt-2 text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                    <span id="confirmLengthKelas" class="font-medium mt-2 text-sm text-red-600" hidden>Format kelas salah! Silakan diperbaiki!</span>
                    <span id="confirmSameKelas" class="font-medium mt-2 text-sm text-red-600" hidden>Kelas sudah ada di tabel! Silakan diperbaiki!</span>
                </div>
                <div class="mt-7">
                    <button type="button" id="btnAdd" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
                </div>
            </div>

            
            <div class="relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <caption class="text-lg font-medium text-gray-900 my-4">List Tambah Kelas</caption>
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
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="editCol">
                        <tr id="zeroContent" class="bg-white text-black border-b hover:bg-gray-300">
                            <td colspan="3" class="py-2 text-center">
                                Kosong
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- form --}}
            <form method="POST" action="{{ $sendUrl }}" id="form_daftar_kelas" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="nama_kelas_val" name="nama_kelas_val">
                {{-- checklist --}}
                <div class="flex items-start mt-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" class="w-4 h-4 border rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required disabled>
                    </div>
                    <label id="rememberLabel" for="remember" class="ml-2 text-sm font-medium text-gray-200">Semua data kelas yang diisi sudah benar.</label>
                </div>
                <button type="submit" id="btnProcess" class="mt-8 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-gray-200 cursor-not-allowed" disabled>Proses</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/admin/daftar_kelas.js') }}"></script>

</body>
</html>