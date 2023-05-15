<div class="grid grid-cols-12 gap-4">
    {{-- previous button --}}
    <button type="button" id="btnPrev" class="col-start-1 col-end-3 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="prevPage()" hidden>Previous</button>

    {{-- next button --}}
    <button type="button" id="btnNext" class="col-start-11 col-end-13 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextPage()">Next</button>

    {{-- process button --}}
    <button type="submit" id="btnProcess" class="col-start-11 col-end-13 mt-5 ml-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" hidden>Process</button>
</div>