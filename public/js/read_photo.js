function readPhoto(element, input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader()

        reader.onload = function (e) {
            $(element).attr("src", e.target.result)
        }
        reader.readAsDataURL(input.files[0])
    }
}