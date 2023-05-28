var currentPage = 1
var totalPage = $(".page").length
const year = new Date().getFullYear().toString()

$("#tahun_ajaran_mhs").val(year)
$("#tahun_ajaran_mhs_val").val(year)

// console.log(totalPage);

$("#pendidikan_terakhir_mhs").on("change", function () {
    if ($(this).val() == 'SMA/SMK') {
        $("#jurusan_pt_mhs").empty()
        $("#jurusan_pt_mhs").append(`
            <option value="" selected>Pilih Jurusan Pendidikan Terakhir</option>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="Komputer">Komputer</option>
        `)
    }
    else {
        $("#jurusan_pt_mhs").empty()
        $("#jurusan_pt_mhs").append(`
            <option value="" selected>Pilih Jurusan Pendidikan Terakhir</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        `)
    }
})

function nextPage() {
    var inputVal = true
    var selectVal = true

    $("#page" + currentPage + " input").each(function (i, e) {
        var id = $(e).attr("id")
        // console.log(id);
        if ($(this).val() == '') {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-blue-600")
            $(e).addClass("border-red-600")
            $("#" + id).next("span").removeAttr("hidden")
            inputVal = false
        }
        else {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-red-600")
            $(e).addClass("border-blue-600")
            $("#" + id).next("span").attr("hidden", true)
        }
    })
    $("#page" + currentPage + " select").each(function (i, e) {
        var id = $(e).attr("id")
        // console.log(id);
        if ($(this).val() == '') {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-blue-600")
            $(e).addClass("border-red-600")
            $("#" + id).next("span").removeAttr("hidden")
            selectVal = false
        }
        else {
            $(e).removeClass("border-gray-300")
            $(e).removeClass("border-red-600")
            $(e).addClass("border-blue-600")
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
    if ($("#pageValue").text() == 'mahasiswa') {
        var namaMhs = $("#nama_lengkap_mhs").val()
        var genderMhs = $("#gender_mhs").val()
        var tplMhs = $("#tempat_lahir_mhs").val()
        var tglMhs = $("#tanggal_lahir_mhs").val()
        var ktpMhs = $("#ktp_mhs").val()
        var agamaMhs = $("#agama_mhs").val()
        var ptMhs = $("#pendidikan_terakhir_mhs").val()
        var sptMhs = $("#sekolah_pt_mhs").val()
        var jurusanptMhs = $("#jurusan_pt_mhs").val()
        var sttsMhs = $("#stts_mhs").val()
        var alamatMhs = $("#alamat_mhs").val()
        var emailMhs = $("#email_mhs").val()
        var nohpMhs = $("#no_hp_mhs").val()
        var jurusanMhs = $("#jurusan_mhs").val()
        var jenjangMhs = $("#jenjang_mhs").val()
        var kelasMhs = $("#kelas_mhs").val()
        var semesterMhs = $("#semester_mhs").val()
        var nimMhs = $("#nim_mhs").val()
        var passMhs = $("#konfirmasi_password_mhs").val()

        $("#nama_lengkap_mhs_val").val(namaMhs)
        $("#gender_mhs_val").val(genderMhs)
        $("#tempat_lahir_mhs_val").val(tplMhs)
        $("#tanggal_lahir_mhs_val").val(tglMhs)
        $("#ktp_mhs_val").val(ktpMhs)
        $("#agama_mhs_val").val(agamaMhs)
        $("#pendidikan_terakhir_mhs_val").val(ptMhs)
        $("#sekolah_pt_mhs_val").val(sptMhs)
        $("#jurusan_pt_mhs_val").val(jurusanptMhs)
        $("#stts_mhs_val").val(sttsMhs)
        $("#alamat_mhs_val").val(alamatMhs)
        $("#email_mhs_val").val(emailMhs)
        $("#no_hp_mhs_val").val(nohpMhs)
        $("#jurusan_mhs_val").val(jurusanMhs)
        $("#jenjang_mhs_val").val(jenjangMhs)
        $("#kelas_mhs_val").val(kelasMhs)
        $("#semester_mhs_val").val(semesterMhs)
        $("#nim_mhs_val").val(nimMhs)
        $("#password_mhs_val").val(passMhs)
    }
    else {
        var namaDsn = $("#nama_lengkap_dsn").val()
        var genderDsn = $("#gender_dsn").val()
        var tplDsn = $("#tempat_lahir_dsn").val()
        var tglDsn = $("#tanggal_lahir_dsn").val()
        var ktpDsn = $("#ktp_dsn").val()
        var agamaDsn = $("#agama_dsn").val()
        var ptDsn = $("#pendidikan_terakhir_dsn").val()
        var sptDsn = $("#sekolah_pt_dsn").val()
        var jurusanptDsn = $("#jurusan_pt_dsn").val()
        var sttsDsn = $("#stts_dsn").val()
        var alamatDsn = $("#alamat_dsn").val()
        var emailDsn = $("#email_dsn").val()
        var nohpDsn = $("#no_hp_dsn").val()
        var psDsn = $("#program_studi_dsn").val()
        var jabatanDsn = $("#jabatan_dsn").val()
        var tglbergabungDsn = $("#tgl_bergabung_dsn").val()
        var passDsn = $("#konfirmasi_password_dsn").val()

        $("#nama_lengkap_dsn_val").val(namaDsn)
        $("#gender_dsn_val").val(genderDsn)
        $("#tempat_lahir_dsn_val").val(tplDsn)
        $("#tanggal_lahir_dsn_val").val(tglDsn)
        $("#ktp_dsn_val").val(ktpDsn)
        $("#agama_dsn_val").val(agamaDsn)
        $("#pendidikan_terakhir_dsn_val").val(ptDsn)
        $("#sekolah_pt_dsn_val").val(sptDsn)
        $("#jurusan_pt_dsn_val").val(jurusanptDsn)
        $("#stts_dsn_val").val(sttsDsn)
        $("#alamat_dsn_val").val(alamatDsn)
        $("#email_dsn_val").val(emailDsn)
        $("#no_hp_dsn_val").val(nohpDsn)
        $("#program_studi_dsn_val").val(psDsn)
        $("#jabatan_dsn_val").val(jabatanDsn)
        $("#tgl_bergabung_dsn_val").val(tglbergabungDsn)
        $("#password_dsn_val").val(passDsn)
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

$("#photo_mhs").on("change", function () {
    var photoMhs = this.files[0]
    var photoList = new DataTransfer()
    var photoMhsInput = $("#photo_mhs_val")[0] // untuk mengambil DOM biar bisa mengakses files

    photoList.items.add(photoMhs)
    readPhoto("#photo_mhs_dis", this)
    photoMhsInput.files = photoList.files
})

$("#photo_dsn").on("change", function () {
    var photoDsn = this.files[0]
    var photoList = new DataTransfer()
    var photoDsnInput = $("#photo_dsn_val")[0] // untuk mengambil DOM biar bisa mengakses files

    photoList.items.add(photoDsn)
    readPhoto("#photo_dsn_dis", this)
    photoDsnInput.files = photoList.files
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