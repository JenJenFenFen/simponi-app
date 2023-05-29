$(".numberValidation").on("keypress", function (e) {
    var keyCode = e.keyCode || e.which
    if (keyCode < 48 || keyCode > 57) return false
})