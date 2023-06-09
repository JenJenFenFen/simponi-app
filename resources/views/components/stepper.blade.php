<div class="mx-10 mb-12">
    <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 sm:text-base">
        <li id="step1" class="flex md:w-full items-center text-blue-600 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 after:border-gray-200">
            @if ($title == 'mahasiswa')
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                    <span id="span1" class="mr-2">1</span>
                    <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" hidden><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Informasi <span class="hidden sm:inline-flex sm:ml-2">Mahasiswa</span>
                </span>
            @else
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                    <span id="span1" class="mr-2">1</span>
                    <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" hidden><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Informasi <span class="hidden sm:inline-flex sm:ml-2">Dosen</span>
                </span>
            @endif
        </li>
        <li id="step2" class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 after:border-gray-200">
            @if ($title == 'mahasiswa')
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                    <span id="span2" class="mr-2">2</span>
                    <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" hidden><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Pengambilan <span class="hidden sm:inline-flex sm:ml-2">Mata</span><span class="hidden sm:inline-flex sm:ml-2">Kuliah</span>
                </span>
            @else
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                    <span id="span2" class="mr-2">2</span>
                    <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" hidden><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Pendaftaran <span class="hidden sm:inline-flex sm:ml-2">Dosen</span>
                </span>
            @endif
        </li>
        <li id="step3" class="flex items-center">
            <span id="span3" class="mr-2">3</span>
            Konfirmasi
        </li>
    </ol>
</div>