var colNo = 0
var number = 0
var selectVal = true
var selectValSame = true
var studentTemp = {}
var studentList = {}

$("#btnAdd").on("click", function () {
    var className = $("#nama_kelas option:selected").text()
    var studentName = $("#nama_mahasiswa option:selected").text()

    $("select").each(function (i, e) {
        var id = $(e).attr("id")

        if ($(this).val() == '') {
            $(e).removeClass("border-red-600")
            $(e).removeClass("border-gray-300")
            $(e).addClass("border-red-600")
            $("#" + id).next("span").removeAttr("hidden")
            selectVal = false
        }
        else {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-red-600")
            $(e).addClass("border-gray-300")
            $("#" + id).next("span").attr("hidden", true)
            $.each(studentTemp, function (i, v) { 
                if (className == v.className && studentName == v.studentName) {
                    $("#nama_mahasiswa").removeClass("border-gray-300")
                    $("#nama_mahasiswa").addClass("border-red-600")
                    $("#nama_mahasiswa").next("span").attr("hidden", true)
                    $("#confirmSameKelas").attr("hidden", true)
                    $("#confirmSameKelas").removeAttr("hidden")
                    selectValSame = false
                }
                else {
                    $("#nama_mahasiswa").removeClass("border-gray-300")
                    $("#nama_mahasiswa").addClass("border-red-600")
                    $("#nama_mahasiswa").next("span").attr("hidden", true)
                    $("#confirmSameKelas").attr("hidden", true)
                    selectValSame = true
                }
            })
            selectVal = true
        }
    })
    console.log('selectVal ' + selectVal);
    console.log('selectValSame ' + selectValSame);
    if (selectVal && selectValSame) {
        studentTemp[colNo] = {className, studentName}
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
                    `+ studentName +`
                </td>
                <td class="py-2">
                    <button id="`+ colNo +`_btnDelete" type="button" class="text-white bg-black font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </button>
                </td>
            </tr>
        `)
        studentList[colNo] = {className, studentName}
        console.log('studentTemp ' , studentTemp);
        console.log('studentList ' , studentList);
        $("#nama_kelas_val").val(JSON.stringify(studentList))
        $("#"+ colNo +"_btnDelete").on("click", function () {
            var e = $(this).closest("tr")
            var numberId = parseInt(e.find(".numberId").text())
            // console.log('numberId ' + numberId);

            number--
            delete studentList[numberId]
            e.nextAll().each(function (i, e) {
                var numberCol = parseInt($(this).find(".numberCol").text())
                $(this).find(".numberCol").text(numberCol - 1)
            })
            e.remove()
            $("#nama_kelas_val").val(JSON.stringify(studentList))
            if(Object.keys(studentList).length <= 0) {
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
    }
})

$("#remember").on("change", function () {
    if ($(this).is(":checked")) {
        $("#btnProcess").removeClass("bg-gray-200")
        $("#btnProcess").removeClass("cursor-not-allowed")
        $("#btnProcess").addClass("bg-blue-700")
        $("#btnProcess").addClass("hover:bg-blue-800")
        $("#btnProcess").removeAttr("disabled")
    }
    else {
        $("#btnProcess").removeClass("bg-blue-700")
        $("#btnProcess").removeClass("hover:bg-blue-800")
        $("#btnProcess").addClass("bg-gray-200")
        $("#btnProcess").addClass("cursor-not-allowed")
        $("#btnProcess").attr("disabled", true)
    }
})