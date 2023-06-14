@extends('main')

@section('container')
    <div class="px-4 sm:ml-64">
        <div class="px-4 pb-[30px] mt-14">
            <div class="grid gap-4">
                <div class="flex items-center justify-left h-24 rounded">
                    <p class="text-3xl text-black">Cek Mahasiswa</p>
                </div>
            </div>

            <form method="POST" action="{{ $sendUrl }}" id="form_cek_mhs" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-4 border-2 border-black rounded-lg pl-5">
                    <div class="col-start-1 col-end-11">
                        <p class="text-2xl text-black mt-3">Cek berdasarkan (pilih salah satu)</p>
                    </div>
                    <div class="col-start-1 col-end-4">
                        <label for="nim_mhs" class="block mb-2 text-sm font-medium text-gray-900">NIM</label>
                        <input type="text" id="nim_mhs" name="nim_mhs" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300 numberValidation"  maxlength="10">
                        <div class="w-[500px] mb-3">
                            <span id="errorEmpty" class="font-medium text-sm text-red-600" hidden>Masih kosong! Silakan diisi!</span>
                            <span id="errorBoth" class="font-medium text-sm text-red-600" hidden>Pilih salah satu yang diisi!</span>
                            <span id="errorLengthNid" class="font-medium text-sm text-red-600" hidden>Format NIM salah! Silakan diperbaiki!</span>
                            <span id="errorNotFound" class="font-medium text-sm text-red-600" hidden>Mahasiswa tidak ditemukan!</span>
                        </div>
                    </div>
                    <div class="col-start-4 col-end-5">
                        <p class="font-medium text-black lg:px-5 sm:px-1 py-8">atau</p>
                    </div>
                    <div class="col-start-5 col-end-8">
                        <label for="nama_mhs" class="block mb-2 text-sm font-medium text-gray-900">Nama Mahasiswa</label>
                        <input type="text" id="nama_mhs" name="nama_mhs" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300 alphabetValidation">
                    </div>
                    <div class="mt-7">
                        <button type="button" id="btnSearch" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Cek</button>
                    </div>
                </div>
            </form>

            <div id="cardResult" class="flex flex-wrap"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/alphabet_space_validation.js') }}"></script>
    <script src="{{ asset('js/number_validation.js') }}"></script>
    <script src="{{ asset('js/number_length_validation.js') }}"></script>
    <script src="{{ asset('js/admin/cek_mahasiswa.js') }}"></script>
@endsection