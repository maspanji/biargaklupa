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
            }).fail(function (e) {
        alert("gagal membuat akun !" + e);
    });

})

//untuk tombol distribusi mahasiswa
$('#distribusikan-button').click(function (e) {
    //mendapatkan id mahasiswa yang terpilih.
    var mhs_distribusi_terpilih = new Array();
    $('input[name="mhs_distribusi"]:checked').each(function () {
        mhs_distribusi_terpilih.push(this.value);
    });

    if (mhs_distribusi_terpilih.length == 0) {
        alert("Pilih mahasiswa yang akan didistribusikan !");
    } else {
        //mendapatkan periode id
        var periode_id = $('input[name="id_periode"]').val();

        //mendapatkan dosen id
        var dosen_id = $('select[name="pembimbing"]').val();

        //simpan ke database pakai ajax
        var url = site_url + "/koord/distribusi/proses_distribusi_baru";
        $.post(url, {id_dosen: dosen_id, id_periode: periode_id, list_id_mhs: mhs_distribusi_terpilih})
                .done(function (data) {
                    alert("Sukses mendistribusikan mahasiswa !");
                    location.reload();
                }).fail(function (e) {
            alert("Gagal mendistribusikan mahasiswa !");
        });
    }

})

$('a.tombol-redistribusi').on("click", function (e) {
    var mhs_nama = $(this).attr("value");
    var mhs_id = $(this).attr("id");
    $("#nama_mhs").empty();
    $("#nama_mhs").append(mhs_nama + " didistribusikan ulang ke:");
    $("#id_mhs_in_modal").empty();
    $("#id_mhs_in_modal").val(mhs_id);
    $('#modal-redistribusi').modal();
})

$('#tombol-redistribusi').on("click", function (e) {
    var periode_id = $("#id_periode").val();
    var mhs_id = $("#id_mhs_in_modal").val();
    var id_dosen_baru = $("#pembimbing").val();

    var url = site_url + "/koord/distribusi/proses_redistribusi";
    $.post(url, {id_periode: periode_id, id_mhs: mhs_id, id_dosen: id_dosen_baru})
            .done(function (data) {
                alert("Sukses mendistribusikan ulang mahasiswa");
                location.reload();
            }).fail(function (e) {
        alert("Gagal mendistribusikan ulang mahasiswa !");
    });

})
