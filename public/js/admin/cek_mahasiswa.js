$("input[type='text']").on("keypress", function (e) {
    var keyCode = e.keyCode || e.which
    if (keyCode == 13) $("#btnSearch").trigger("click")
})

$("#btnSearch").on("click", function () {
    var nimMhsVal = $("#nim_mhs").val()
    var namaMhsVal = $("#nama_mhs").val()
    var tokenVal = $("input[type='hidden']").val()
    // console.log(tokenVal);

    $("input[type='text']").each(function (i, e) {
        $(e).removeClass("border-gray-300")
        $(e).removeClass("border-red-600")
        $("#errorEmpty").attr("hidden", true)
        $("#errorBoth").attr("hidden", true)
        $("#errorLengthNim").attr("hidden", true)
        $("#errorNotFound").attr("hidden", true)
    })
    if (nimMhsVal == '' && namaMhsVal == '') {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-red-600")
        })
        $("#errorEmpty").removeAttr("hidden")
        return false
    }
    else if (!nimMhsVal == '' && !namaMhsVal == '') {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-red-600")
        })
        $("#errorBoth").removeAttr("hidden")
        return false
    }
    else if (!nimMhsVal == '' && nimValidation("#nim_mhs", "#errorLengthNim") == false) {
        nimValidation("#nim_mhs", "#errorLengthNim")
        return false
    }
    else {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-gray-300")
        })
        $.ajax({
            type: "post",
            url: "/admin/fetch-mahasiswa",
            data: {
                _token: tokenVal,
                nim_mhs: nimMhsVal,
                nama_mhs: namaMhsVal
            },
            success: function (response) {
                var nimMhsRes
                var namaMhsRes
                var jurusanMhsRes
                var photoMhsRes

                if (response.length <= 0) $("#errorNotFound").removeAttr("hidden")
                else {
                    $("#cardResult").empty()
                    $.each(response, function (i, v) { 
                        var assetTemplate = "/storage/"
                        nimMhsRes = response[i]["nim"]
                        namaMhsRes = response[i]["name"]
                        jurusanMhsRes = response[i]["major"]
                        photoMhsRes = response[i]["photo"]
    
                        $("#cardResult").append(`
                            <a class="flex flex-col items-center mt-10 mr-5 w-[494px] bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-200">
                                <img class="object-cover rounded-t-lg w-[100px] h-full md:rounded-none md:rounded-l-lg" src="`+ assetTemplate + photoMhsRes +`" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">`+ namaMhsRes +`</h5>
                                    <span class="font-normal text-gray-700">`+ nimMhsRes +`</span>
                                    <span class="font-normal text-gray-700">`+ jurusanMhsRes +`</span>
                                    <button type="button" id="btnEdit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-16 mt-5 px-5 py-2.5 text-center">Edit</button>
                                </div>
                            </a>
                        `)
                    });
                }
            },
            error: function (xhr, status, error) {

            }
        })
    }
})