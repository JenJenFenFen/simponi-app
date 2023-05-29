$(".alphabetValidation").on("keypress", function (e) {
    var keyCode = e.keyCode || e.which
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 122) && keyCode != 32) return false
})