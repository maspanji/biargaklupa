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
        $.post(url, {nim: nim_post, nama:nama_post, no_hp:nohp_post, email:email_post})
                .done(function (data) {
                    alert("data dikirim "+data);
                });
    } else {
        alert("ada kesalahan");
    }
});

