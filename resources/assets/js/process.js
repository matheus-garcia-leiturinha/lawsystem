/**
 * Created by matheus garcia on 24/04/2017.
 */

$(document).ready(function(){


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

        if($( ".clientes-component .child input" ).length < 1  ||
            Form.isEmpty($( "form.processos select[name=adv_responsavel]" )) ||
            Form.isEmpty($( "form.processos input[name='number']" )) ||
            Form.isEmpty($( "form.processos select[name=adv_terceiro]" )) ||
            Form.isEmpty($( "form.processos select[name=contrario]" )) ||
            Form.isEmpty($( "form.processos input[name='valor']" )) ||
            Form.isEmpty($( "form.processos input[name='data_ajuizamento']" ))
        )
        {
            alert("Prencha os dados corretamente");
            return false;
        }

        //console.log(cliente);
        //console.log($( "input[name='polo']:checked" )[0].value);
        //console.log(adv_responsavel);
        //console.log($( "input[name='number']" )[0].value);
        //console.log(adv_terceiro);
        //console.log(contrario);
        //console.log($( "input[name='valor']" )[0].value);
        //console.log($( "input[name='data_ajuizamento']" )[0].value);
        //console.log($( "input[name='audiencia']:checked" )[0].value);
        //console.log($( "input[name='data_audiencia_inaugural']" )[0].value);
        //console.log($( "input[name='pericias']:checked" )[0].value);
        //console.log(pericia);
        //console.log($( "input[name='valor_pericia']" )[0].value);
        //console.log($( "textarea[name='ocorrencia_inaugural']").value);

        //return false;


        $("form.processos").submit();

        return false;

    });

    $( "form.processos input[name='pericias']" ).on("change",function() {

        switch($(this).val())
        {
            case "2":
                $("div.block.pericia").removeClass('active');
                $("div.block.pericia .selectpicker").val("").trigger('change');
                $("div.block.pericia input[name=value_pericia]").val("");
                break;
            case "1":
                $("div.block.pericia").addClass('active');
                break;
        }
    });

    $( "form.processos input[name='depositos']" ).on("change",function() {

        switch($(this).val())
        {
            case "2":
                $("div.block.deposito").removeClass('active');
                $("div.block.deposito .selectpicker").val("").trigger('change');
                $("div.block.deposito input[name=value_deposito]").val("");
                break;
            case "1":
                $("div.block.deposito").addClass('active');
                break;
        }
    });
    $( "form.processos input[name='recolhimentos']" ).on("change",function() {

        switch($(this).val())
        {
            case "2":
                $("div.block.recolhimento").removeClass('active');
                $("div.block.recolhimento .selectpicker").val("").trigger('change');
                $("div.block.recolhimento input[name=value_recolhimento]").val("");
                break;
            case "1":
                $("div.block.recolhimento").addClass('active');
                break;
        }
    });

    $( "form.processos input[name='audiencia']" ).on("change",function() {

        switch($(this).val())
        {
            case "2":
                $("div.block.data_audiencia_inaugural").removeClass('active');
                $("div.block.data_audiencia_inaugural input").val("");
                break;
            case "1":
                $("div.block.data_audiencia_inaugural").addClass('active');
                break;
        }
    });

    window.setTimeout("$('#datetimepicker').datetimepicker({ format: 'DD/MM/YYYY' })", 700);
    window.setTimeout("$('#datetimepicker2').datetimepicker({ format: 'DD/MM/YYYY HH:mm' })", 700);


    $('.selectpicker[name=adv_responsavel]').selectpicker('refresh');
    $('.selectpicker[name=adv_terceiro]').selectpicker('refresh');



});

var processo =
{

    add : function (type) {

        switch (type) {
            case 'cliente':

                if($("select[name=cliente] option:selected")[0].value != "") {


                    $(".clientes-component").append(
                        '<div class="child">'
                        + '<input name="cliente_id[]" type="hidden" value="' + $("select[name=cliente] option:selected")[0].value + '"/>'
                        + '<div class="values">'
                        + '<span>' + $(".bootstrap-select button[data-id=cliente] .filter-option")[0].innerText + '</span>'
                        + '</div>'
                        + '<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        + '</div>'
                    );

                    $("div.block.cliente .selectpicker").val("").trigger('change');
                }
                break;
            case 'participante':

                if($("div.block.participante input[name=participante]").val() != "") {


                    $(".participantes-component").append(
                        '<div class="child">'
                        + '<input name="participante_name[]" type="hidden" value="' + $("div.block.participante input[name=participante]").val() + '"/>'
                        + '<div class="values">'
                        + '<span>' + $("div.block.participante input[name=participante]").val() + '</span>'
                        + '</div>'
                        + '<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        + '</div>'
                    );

                    $("div.block.participante input[name=participante]").val("");
                }
                break;
            case 'pericia':

                if($("select[name=pericia] option:selected")[0].value != "") {
                    $(".pericias-component").append(
                        '<div class="child">'
                        + '<input name="pericia_natureza[]" type="hidden" value="' + $("select[name=pericia] option:selected")[0].value + '"/>'
                        + '<input name="pericia_honorario[]"  type="hidden" value="' + $("div.block.pericia input[name=value_pericia]").val() + '"/>'
                        + '<div class="values">'
                        + '<span>' + $(".bootstrap-select button[data-id=pericia] .filter-option")[0].innerText + '</span>'
                        + '<span>' + $("div.block.pericia input[name=value_pericia]").val() + '</span>'
                        + '</div>'
                        + '<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        + '</div>'
                    );

                    $("div.block.pericia .selectpicker").val("").trigger('change');
                    $("div.block.pericia input[name=value_pericia]").val("");
                }
                break;
            case 'deposito':


                if($("select[name=deposito] option:selected")[0].value != "") {
                    $(".depositos-component").append(
                        '<div class="child">'
                        + '<input name="deposito_motivo[]" type="hidden" value="' + $("select[name=deposito] option:selected")[0].value + '"/>'
                        + '<input name="deposito_valor[]"  type="hidden" value="' + $("div.block.deposito input[name=value_deposito]").val() + '"/>'
                        + '<div class="values">'
                        + '<span>' + $(".bootstrap-select button[data-id=deposito] .filter-option")[0].innerText + '</span>'
                        + '<span>' + $("div.block.deposito input[name=value_deposito]").val() + '</span>'
                        + '</div>'
                        + '<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        + '</div>'
                    );

                    $("div.block.deposito .selectpicker").val("").trigger('change');
                    $("div.block.deposito input[name=value_deposito]").val("");
                }
                break;
            case 'recolhimento':


                if($("select[name=recolhimento] option:selected")[0].value != "")
                {
                    $(".recolhimentos-component").append(
                        '<div class="child">'
                        +'<input name="recolhimento_motivo[]" type="hidden" value="'+$("select[name=recolhimento] option:selected")[0].value+'"/>'
                        +'<input name="recolhimento_valor[]"  type="hidden" value="'+$("div.block.recolhimento input[name=value_recolhimento]").val()+'"/>'
                        +'<div class="values">'
                        +'<span>'+$(".bootstrap-select button[data-id=recolhimento] .filter-option")[0].innerText+'</span>'
                        +'<span>'+$("div.block.recolhimento input[name=value_recolhimento]").val()+'</span>'
                        +'</div>'
                        +'<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        +'</div>'
                    );

                    $("div.block.recolhimento .selectpicker").val("").trigger('change');
                    $("div.block.recolhimento input[name=value_recolhimento]").val("");

                }
                break;
            case 'pedido':
                if($("select[name=pedido] option:selected")[0].value != "")
                {
                    $(".pedidos-component").append(
                        '<div class="child">'
                        +'<input name="pedido_motivo[]" type="hidden" value="'+$("select[name=pedido] option:selected")[0].value+'"/>'
                        +'<div class="values">'
                        +'<span>'+$(".bootstrap-select button[data-id=pedido] .filter-option")[0].innerText+'</span>'
                        +'<input name="pedido_valor[]"  type="number" value="'+$("div.block.pedido input[name=value_pedido]").val()+'"/>'
                        +'<select class="" data-live-search=true title=" " name="pedido_risco[]" id="pedido_risco">'
                        +'<option title="possível" value="2">Possível</option>'
                        +'<option title="provavel" value="3">Provável</option>'
                        +'<option title="remoto" value="4">Remoto</option>'
                        +'</select>'
                        +'</div>'
                        +'<a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>'
                        +'</div>'
                    );

                    $("div.block.pedido .selectpicker").val("").trigger('change');
                    $("div.block.pedido input[name=value_pedido]").val("");
                }
                break;
        }
    },

    remove: function (el)
    {
        $(el).parents(".child").remove()
    }

}