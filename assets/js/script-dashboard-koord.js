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
                     alert("data");   
                });
    } else {
        alert("hello");
    }
})