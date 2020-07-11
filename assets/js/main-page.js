/* 
 * JS untuk halaman utama
 * 
 */
$('#register-button').on("click", function (e) {
    var nim_post = $("#nim").val();
    var nama_post = $("#nama").val();
    var nohp_post = $("#no_hp").val();
    var email_post = $("#email").val();
    if (nim_post != "" && nohp_post != "" && nama_post != "" && email_post != "") {
        var url = site_url + "/registrasi/register_baru";
        $.post(url, {nim: nim_post, nama: nama_post, no_hp: nohp_post, email: email_post})
                .done(function (data) {
                    $("#header-modal").append("Informasi");
                    $("#body-modal").append("Sukses Melakukan Registrasi ! Akun akan dikirimkan ke email setalah user terverifikasi.");
                    $("#modal-informasi").modal();
                    
                    //mengosongkan field
                    $("#nim").val("");
                    $("#nama").val("");
                    $("#no_hp").val("");
                    $("#email").val("");
                })
                .fail(function () {
                    $("#header-modal").append("Kesalahan");
                    $("#body-modal").append("Tidak bisa menyimpan ke database.");
                    $("#modal-informasi").modal();
                });
    } else {
        alert("ada kesalahan");
    }
});
