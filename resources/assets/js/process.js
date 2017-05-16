/**
 * Created by matheus garcia on 24/04/2017.
 */


$(document).ready(function(){

    var cliente = $(".bootstrap-select button[data-id=cliente] .filter-option")[0].innerText;
    //var tribunal = $(".bootstrap-select button[data-id=tribunal] .filter-option")[0].innerText;
    //var vara = $(".bootstrap-select button[data-id=vara] .filter-option")[0].innerText;
    var adv_responsavel = $(".bootstrap-select button[data-id=adv_responsavel] .filter-option")[0].innerText;
    var adv_terceiro = $(".bootstrap-select button[data-id=adv_terceiro] .filter-option")[0].innerText;
    var contrario = $(".bootstrap-select button[data-id=contrario] .filter-option")[0].innerText;

    $('.selectpicker').on('change', function(){

        var selected = $(this).find("option:selected").html();

        switch($(this).attr('name'))
        {
            case "tribunal":
                tribunal = selected;
                break;
            case "vara":
                vara = selected;
                break;
            case "adv_responsavel":
                adv_responsavel = selected;
                break;
            case "adv_terceiro":
                adv_terceiro = selected;
                break;
        }

    });

    window.setTimeout("$('#datetimepicker').datetimepicker()", 400);

})