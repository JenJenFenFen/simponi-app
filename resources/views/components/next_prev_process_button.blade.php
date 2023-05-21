<div class="grid grid-cols-12 gap-4">
    {{-- previous button --}}
    <button type="button" id="btnPrev" class="col-start-1 col-end-3 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" onclick="prevPage()" hidden>Previous</button>

    {{-- next button --}}
    <button type="button" id="btnNext" class="col-start-11 col-end-13 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" onclick="nextPage()">Next</button>

    {{-- process button --}}
    <button type="submit" id="btnProcess" class="col-start-11 col-end-13 mt-5 ml-3 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-gray-200 cursor-not-allowed" hidden disabled>Process</button>
</div>