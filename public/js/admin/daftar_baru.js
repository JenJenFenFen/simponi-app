var currentPage = 1
var totalPage = $(".page").length

// console.log(totalPage);

function nextPage() {
    var inputVal = true
    var selectVal = true

    $("#page" + currentPage + " input").each(function (i, e) {
        if ($(this).val() == '') {
            var id = $(e).attr("id")
            // console.log(id);
            $(e).removeClass("border border-gray-300")
            $(e).addClass("border border-red-500")
            $("#" + id).next("span").removeAttr("hidden")
            inputVal = false
        }
    })
    $("#page" + currentPage + " select").each(function (i, e) {
        if ($(this).val() == '') {
            var id = $(e).attr("id")
            // console.log(id);
            $(e).removeClass("border border-gray-300")
            $(e).addClass("border border-red-500")
            $("#" + id).next("span").removeAttr("hidden")
            selectVal = false
        }
    })
    if (inputVal && selectVal) {
        // console.log(currentPage);
        $("#step" + currentPage).removeClass("after:border-b after:border-gray-200 after:border-1")
        $("#step" + currentPage).addClass("after:border-b after:border-blue-600 after:border-1")
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