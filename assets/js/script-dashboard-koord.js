$('#atur-periode').on("click", function (e) {
    $.ajax({url: "http://localhost/biargaklupa/index.php/koord/periode"}).done(function (result) {
        $("#main-content").html(result);
    });
})

$('#submit-button-periode').on("click", function (e) {
    var prd = $('#input-periode').val();
    var ket = $('#input-ket-periode').val();
    if (prd != "") {
        var url = site_url + "/koord/periode/simpan_baru";
        $.post(url, {periode: prd, keterangan: ket})
                .done(function (data) {
                    alert("data dari server: " + data);
                });
    } else {
        alert("ada kesalahan");
    }
})

$('a.tombol-tolak').on("click", function (e) {
    var url = site_url + "/koord/registrasi/verifikasi";
    var mhs_id = $(this).attr("value");
    var status_tolak = 0;
    $.post(url, {id_mhs: mhs_id, status: status_tolak}).done(function (data) {
        alert("Status verifikasi sudah ditolak !");
        location.reload();
    });
})

$('a.tombol-setujui').on("click", function (e) {
    var url = site_url + "/koord/registrasi/verifikasi";
    var mhs_id = $(this).attr("value");
    var status_setuju = 1;
    $.post(url, {id_mhs: mhs_id, status: status_setuju})
            .done(function (data) {
                alert("Status verifikasi sudah disetujui !");
                location.reload();
            }).fail(function(e){
                alert("gagal membuat akun !"+e);
            });

})