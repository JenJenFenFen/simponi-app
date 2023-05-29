function ktpValidation(element1, element2) {
    var e1 = $(element1).val()
    var e2 = $(element2)

    if (e1.length < 16) {
        e2.prev("span").attr("hidden", true)
        e2.removeAttr("hidden")
        return false
    }
    else {
        e2.attr("hidden", true)
    }
}

function hpValidation(element1, element2) {
    var e1 = $(element1).val()
    var e2 = $(element2)

    if (e1.length < 11) {
        e2.prev("span").attr("hidden", true)
        e2.removeAttr("hidden")
        return false
    }
    else {
        e2.attr("hidden", true)
    }
}