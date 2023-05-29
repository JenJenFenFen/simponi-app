$("#btnAdd").on("click", function () {
    if ($("#nama_kelas").val() == '') {
        $("#confirmLengthKelas").attr("hidden", true)
        $("#nama_kelas").next("span").attr("hidden", true)
        $("#nama_kelas").next("span").removeAttr("hidden")
        return false
    }
    else if ($("#nama_kelas").val().length < 4) {
        $("#confirmLengthKelas").attr("hidden", true)
        $("#nama_kelas").next("span").attr("hidden", true)
        $("#confirmLengthKelas").removeAttr("hidden")
    }
    else {
        $("#confirmLengthKelas").attr("hidden", true)
        $("#nama_kelas").next("span").attr("hidden", true)
    }
})

$("#remember").on("change", function () {
    if ($(this).is(":checked")) {
        $("#btnProcess").removeClass("bg-gray-200")
        $("#btnProcess").removeClass("cursor-not-allowed")
        $("#btnProcess").addClass("bg-blue-700")
        $("#btnProcess").addClass("hover:bg-blue-800")
        $("#btnProcess").prop("disabled", false)
    }
    else {
        $("#btnProcess").removeClass("bg-blue-700")
        $("#btnProcess").removeClass("hover:bg-blue-800")
        $("#btnProcess").addClass("bg-gray-200")
        $("#btnProcess").addClass("cursor-not-allowed")
        $("#btnProcess").prop("disabled", true)
    }
})

// text-gray-900