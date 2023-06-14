var colNo = 0
var number = 0
var classTemp = []
var classList = []

$("#nama_kelas").on("keypress", function (e) {
    var keyCode = e.keyCode || e.which
    if (keyCode == 32) return false // spasi
    if (keyCode == 13) $("#btnAdd").trigger("click") // enter
})

$("#btnAdd").on("click", function () {
    var className = $("#nama_kelas").val()

    $("#nama_kelas").removeClass("border-gray-300")
    $("#nama_kelas").removeClass("border-red-600")
    $("#rememberLabel").removeClass("text-gray-200")
    $("#rememberLabel").removeClass("text-gray-900")
    $("#confirmLengthKelas").attr("hidden", true)
    $("#nama_kelas").next("span").attr("hidden", true)
    $("#confirmSameKelas").attr("hidden", true)
    if ($("#nama_kelas").val() == '') {
        $("#nama_kelas").addClass("border-red-600")
        $("#nama_kelas").next("span").removeAttr("hidden")
        return false
    }
    else if ($("#nama_kelas").val().length < 4) {
        $("#nama_kelas").addClass("border-red-600")
        $("#confirmLengthKelas").removeAttr("hidden")
        return false
    }
    else if (classTemp.includes(className)) {
        $("#nama_kelas").addClass("border-red-600")
        $("#confirmSameKelas").removeAttr("hidden")
        return false
    }
    else {
        $("#nama_kelas").addClass("border-gray-300")
        $("#remember").removeAttr("disabled")
        $("#rememberLabel").addClass("text-gray-900")
    }
    classTemp.push(className)
    $("#zeroContent").attr("hidden", true)
    colNo++
    number++
    $("#editCol").append(`
        <tr id="`+ colNo +`_row" class="bg-white text-center text-black border-b hover:bg-gray-300 rowData">
            <td class="py-2 numberId" hidden>
                `+ colNo +`
            </td>
            <td class="py-2 numberCol">
                `+ number +`
            </td>
            <td class="py-2">
                `+ className.toUpperCase() +`
            </td>
            <td class="py-2">
                <button id="`+ colNo +`_btnDelete" type="button" class="text-white bg-black font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                </button>
            </td>
        </tr>
    `)
    classList.push(className)
    console.log(classList);
    $("#nama_kelas_val").val(classList)
    $("#"+ colNo +"_btnDelete").on("click", function () {
        var e = $(this).closest("tr")
        var numberId = parseInt(e.find(".numberId").text())
        var classNameTr = e.find(".numberCol").next().text().toLowerCase().trim()
        var index = classTemp.indexOf(classNameTr)
        // console.log('numberId ' + numberId);

        number--
        classList.splice(index, 1)
        classTemp.splice(index, 1)
        console.log(classList);
        e.nextAll().each(function (i, e) {
            var numberCol = parseInt($(this).find(".numberCol").text())
            $(this).find(".numberCol").text(numberCol - 1)
        })
        e.remove()
        $("#nama_kelas_val").val(classList)
        if(classList.length <= 0) {
            $("#nama_kelas_val").removeAttr("value")
            $("#zeroContent").removeAttr("hidden")
            $("#remember").prop("checked", false)
            $("#remember").attr("disabled", true)
            $("#rememberLabel").removeClass("text-gray-900")
            $("#rememberLabel").addClass("text-gray-200")
            $("#btnProcess").removeClass("bg-blue-700")
            $("#btnProcess").removeClass("hover:bg-blue-800")
            $("#btnProcess").addClass("bg-gray-200")
            $("#btnProcess").addClass("cursor-not-allowed")
            $("#btnProcess").attr("disabled", true)
        }
        // console.log('numberCol ' + number);
    })
})

$("#remember").on("change", function () {
    $("#btnProcess").removeClass("bg-gray-200")
    $("#btnProcess").removeClass("cursor-not-allowed")
    $("#btnProcess").removeClass("bg-blue-700")
    $("#btnProcess").removeClass("hover:bg-blue-800")
    $("#btnProcess").attr("disabled", true)
    if ($(this).is(":checked")) {
        $("#btnProcess").addClass("bg-blue-700")
        $("#btnProcess").addClass("hover:bg-blue-800")
        $("#btnProcess").removeAttr("disabled")
    }
    else {
        $("#btnProcess").addClass("bg-gray-200")
        $("#btnProcess").addClass("cursor-not-allowed")
    }
})