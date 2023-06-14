$("input[type='text']").on("keypress", function (e) {
    var keyCode = e.keyCode || e.which
    if (keyCode == 13) $("#btnSearch").trigger("click")
})

$("#btnSearch").on("click", function () {
    var nidDsnVal = $("#nid_dsn").val()
    var namaDsnVal = $("#nama_dsn").val()
    var tokenVal = $("input[type='hidden']").val()
    // console.log(tokenVal);

    $("input[type='text']").each(function (i, e) {
        $(e).removeClass("border-gray-300")
        $(e).removeClass("border-red-600")
        $("#errorEmpty").attr("hidden", true)
        $("#errorBoth").attr("hidden", true)
        $("#errorLengthNid").attr("hidden", true)
        $("#errorNotFound").attr("hidden", true)
    })
    if (nidDsnVal == '' && namaDsnVal == '') {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-red-600")
        })
        $("#errorEmpty").removeAttr("hidden")
        return false
    }
    else if (!nidDsnVal == '' && !namaDsnVal == '') {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-red-600")
        })
        $("#errorBoth").removeAttr("hidden")
        return false
    }
    else if (!nidDsnVal == '' && nidValidation("#nid_dsn", "#errorLengthNid") == false) {
        nidValidation("#nid_dsn", "#errorLengthNid")
        return false
    }
    else {
        $("input[type='text']").each(function (i, e) {
            $(e).addClass("border-gray-300")
        })
        $.ajax({
            type: "post",
            url: "/admin/fetch-dosen",
            data: {
                _token: tokenVal,
                nid_dsn: nidDsnVal,
                nama_dsn: namaDsnVal
            },
            success: function (response) {
                var nidDsnRes
                var namaDsnRes
                var divisiDsnRes
                var positionDsnRes
                var photoDsnRes

                if (response.length <= 0) $("#errorNotFound").removeAttr("hidden")
                else {
                    $("#cardResult").empty()
                    $.each(response, function (i, v) { 
                        var assetTemplate = "/storage/"
                        nidDsnRes = response[i]["nid"]
                        namaDsnRes = response[i]["name"]
                        divisiDsnRes = response[i]["division"]
                        positionDsnRes = response[i]["position"]
                        photoDsnRes = response[i]["photo"]
    
                        $("#cardResult").append(`
                            <a class="flex flex-col items-center mt-10 mr-5 w-[494px] bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-200">
                                <img class="object-cover rounded-t-lg w-[100px] h-full md:rounded-none md:rounded-l-lg" src="`+ assetTemplate + photoDsnRes +`" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">`+ namaDsnRes +`</h5>
                                    <span class="font-normal text-gray-700">`+ nidDsnRes +`</span>
                                    <span class="font-normal text-gray-700">`+ divisiDsnRes +`</span>
                                    <span class="font-normal text-gray-700">`+ positionDsnRes +`</span>
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