function sizePhotovalidation(einput, etarget) {
    var file = $(einput)[0].files[0] // mengambil DOM
    var fileSize = file.size / (1024 * 1024)
    var maxFileSize = 1 // 1 MB

    if (fileSize > maxFileSize) {
        $(etarget).prev("span").attr("hidden", true)
        $(etarget).removeAttr("hidden")
        return false
    }
    else {
        $(etarget).attr("hidden", true)
        return true
    }
}