$(document).ready(function () {
    $("#myBtnLg").click(function () {
        $.post("../class/faces/login.php",
                function (callback) {
                    var html = callback;
                    $("#lg-modal-body").html(html);
                    $("#mylogin").modal();
                }
        );
    });
});    

$(document).ready(function () {
    $("#myBtn").click(function () {
        $.post("../class/faces/contatoInc.php",
                function (callback) {
                    var html = callback;
                    $("#ic-modal-body").html(html);
                    $("#myModalInsert").modal();
                }
        );
    });
});    

$(document).ready(function () {
    $("#iframecontatoslist").ready(function () {
        $("#iframecontatoslist").contents().find("tr").click(function () {

            var idcontato = $(this).attr("id");
            var nome      = $(this).contents("#idnome").text();
            var telefone  = $(this).contents("#idtelefone").text();
            var email     = $(this).contents("#idemail").text();

            $.get("../class/faces/contatoEd.php",
                    {
                        "a_contato": idcontato,
                        "a_nome": nome,
                        "a_telefone": telefone,
                        "a_email": email
                    },
                    function (callback) {
                        var html = callback;
                        $("#ed-modal-body").html(html);
                        $("#myModalEdit").modal();
                    }
            );
    
        });
    });
});    

$(document).ready(function () {
    $('.form-control').on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $('#iframecontatoslist').ready(function () {
            $('#iframecontatoslist').contents().find('tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
});
