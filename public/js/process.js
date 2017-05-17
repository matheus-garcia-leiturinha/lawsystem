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

    $("form.processos input[type=submit]").on("click", function(event){

        event.preventDefault();


        var cliente = $("select[name=cliente] option:selected")[0].value;
        var adv_responsavel = $("select[name=adv_responsavel] option:selected")[0].value;
        var adv_terceiro = $("select[name=adv_terceiro] option:selected")[0].value;
        var contrario = $("select[name=contrario] option:selected")[0].value;
       // var contrario = $(".bootstrap-select button[data-id=contrario] .filter-option")[0].innerText;
        var pericia = $("select[name=pericia] option:selected")[0].value;

        console.log(cliente);
        console.log(adv_responsavel);
        console.log($( "input[name='polo']:checked" )[0].value);
        console.log($( "input[name='number']" )[0].value);
        console.log(adv_terceiro);
        console.log(contrario);
        console.log(pericia);
        console.log($( "input[name='value']" )[0].value);
        console.log($( "input[name='data_ajuizamento']" )[0].value);
        console.log($( "input[name='audiencia']:checked" )[0].value);
        console.log($( "input[name='pericias']:checked" )[0].value);

        return false;


        $("form.processos").submit();

    });

    $( "form.processos input[name='pericias']" ).on("change",function() {

        switch($(this).val())
        {
            case "0":
                $("div.block.pericia").removeClass('active');
                $("div.block.pericia .selectpicker").val("").trigger('change');
                $("div.block.pericia input[name=value_pericia]").val("");
                break;
            case "1":
                $("div.block.pericia").addClass('active');
                break;
        }
    });
    $( "form.processos input[name='audiencia']" ).on("change",function() {

        switch($(this).val())
        {
            case "0":
                $("div.block.data_audiencia_inaugural").removeClass('active');
                $("div.block.data_audiencia_inaugural input").val("");
                break;
            case "1":
                $("div.block.data_audiencia_inaugural").addClass('active');
                break;
        }
    });

    window.setTimeout("$('#datetimepicker').datetimepicker()", 700);
    window.setTimeout("$('#datetimepicker2').datetimepicker()", 700);


    $('.selectpicker[name=adv_responsavel]').selectpicker('refresh');
    $('.selectpicker[name=adv_terceiro]').selectpicker('refresh');

})