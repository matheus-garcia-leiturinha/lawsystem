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

    $("input[type=submit]").on("click", function(event){

        event.preventDefault();


        var cliente = $(".bootstrap-select button[data-id=cliente] .filter-option")[0].innerText;
        var adv_responsavel = $(".bootstrap-select button[data-id=adv_responsavel] .filter-option")[0].innerText;
        var adv_terceiro = $(".bootstrap-select button[data-id=adv_terceiro] .filter-option")[0].innerText;
        var contrario = $(".bootstrap-select button[data-id=contrario] .filter-option")[0].innerText;
        var pericia = $(".bootstrap-select button[data-id=pericia] .filter-option")[0].innerText;

        console.log(cliente);
        console.log(adv_responsavel);
        console.log($( "input[name='polo']" )[0].value);
        console.log($( "input[name='number']" )[0].value);
        console.log(adv_terceiro);
        console.log(contrario);
        console.log($( "input[name='value']" )[0].value);
        console.log($( "input[name='date']" )[0].value);
        console.log($( "input[name='audiencia']" )[0].value);
        console.log($( "input[name='pericias']" )[0].value);

        return false;


        $("form").submit();

    });



    window.setTimeout("$('#datetimepicker').datetimepicker()", 400);

})