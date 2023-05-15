var currentPage = 1
var totalPage = $(".page").length

// console.log(totalPage);

function nextPage() {
    var inputVal = true
    var selectVal = true

    $("#page" + currentPage + " input").each(function (i, e) {
        var id = $(e).attr("id")
        // console.log(id);
        if ($(this).val() == '') {
            $(e).removeClass("border border-gray-300")
            $(e).addClass("border border-red-500")
            $("#" + id).next("span").removeAttr("hidden")
            inputVal = false
        }
        else {
            $(e).removeClass("border border-gray-300")
            $(e).removeClass("border border-red-500")
            $(e).addClass("border border-blue-500")
            $("#" + id).next("span").attr("hidden", true)
        }
    })
    $("#page" + currentPage + " select").each(function (i, e) {
        var id = $(e).attr("id")
        // console.log(id);
        if ($(this).val() == '') {
            $(e).removeClass("border-gray-300")
            $(e).addClass("border-red-500")
            $("#" + id).next("span").removeAttr("hidden")
            selectVal = false
        }
        else {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-red-500")
            $(e).addClass("border-blue-500")
            $("#" + id).next("span").attr("hidden", true)
        }
    })
    if (inputVal && selectVal) {
        if (currentPage == 2) {
            var inputValPass = []
            $(".checkPass").each(function (i, e) {
                var inputCheckPass = $(this).next("input").val()
                inputValPass.push(inputCheckPass)
            })
            if (inputValPass[0] !== inputValPass[1]) {
                $("#confirmPass").prev("span").attr("hidden", true)
                $("#confirmPass").removeAttr("hidden")
                inputValPass.splice(0, inputValPass.length)
                return false
            }
            else {
                $("#confirmPass").attr("hidden", true)
                inputValPass.splice(0, inputValPass.length)
            }
        }
        // console.log(currentPage);
        $("#step" + currentPage).removeClass("after:border-gray-200")
        $("#step" + currentPage).addClass("after:border-blue-600")
        $("#span" + currentPage).attr("hidden", true)
        $("#span" + currentPage).next("svg").removeAttr("hidden")
        currentPage++
        // console.log(currentPage);
        $(".page").attr("hidden", true)
        $("#page" + currentPage).removeAttr("hidden")
        $("#btnPrev").removeAttr("hidden")
        $("#step" + currentPage).addClass("text-blue-600")
        if (currentPage == totalPage) {
            $("#btnNext").attr("hidden", true)
            $("#btnProcess").removeAttr("hidden")
        }
    }
}

function prevPage() {
    // console.log(currentPage);
    $("#step" + currentPage).removeClass("text-blue-600")
    currentPage--
    $(".page").attr("hidden", true)
    $("#page" + currentPage).removeAttr("hidden")
    $("#btnProcess").attr("hidden", true)
    $("#btnNext").removeAttr("hidden")
    $("#step" + currentPage).removeClass("after:border-blue-600")
    $("#step" + currentPage).addClass("after:border-gray-200")
    $("#span" + currentPage).next("svg").attr("hidden", true)
    $("#span" + currentPage).removeAttr("hidden")
    if (currentPage == 1) {
        $("#btnPrev").attr("hidden", true)
    }
}