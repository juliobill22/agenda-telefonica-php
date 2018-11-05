$(document).ready(function () {
    $("#btn-login").click(function () {
        $.post("../class/faces/login.php",
                function (callback) {
                    var html = callback;
                    $("#lg-modal-body").html(html);
                    $("#modal-login").modal();
                }
        );
    });
});    

$(document).ready(function () {
    $("#btn-inc-contato").click(function () {
        $.post("../class/faces/contatoInc.php",
                function (callback) {
                    var html = callback;
                    $("#ic-modal-body").html(html);
                    $("#modal-insert-contato").modal();
                }
        );
    });
});    

$(document).ready(function () {
    $("#index-list-contatos").ready(function () {
        $("#index-list-contatos").contents().find("tr").click(function () {

            var idcontato = $(this).attr("id");
            var nome      = $(this).contents("#td-id-nome").text();
            var telefone  = $(this).contents("#td-id-telefone").text();
            var email     = $(this).contents("#td-id-email").text();

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
                        $("#modal-edit-contato").modal();
                    }
            );
    
        });
    });
});    

$(document).ready(function () {
    $('.form-control').on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $('#index-list-contatos').ready(function () {
            $('#index-list-contatos').contents().find('tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
});
