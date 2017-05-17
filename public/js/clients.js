/**
 * Created by matheus garcia on 24/04/2017.
 */

$(document).ready(function(){

    createMask();

    $( "input[name='type']" ).on("change",function() {


        $(".doc").removeClass("checked");

        var classname = "div.doc."+$(this).val();
        $(classname).addClass("checked");
        
    });

    $("form.clients input[type=submit]").on("click", function(event){

        event.preventDefault();

       // console.log($(".bootstrap-select .filter-option")[0].innerText);

        switch($( "input[name='type']:checked").val())
        {
            case "cpf":
                if(Form.isEmpty($( "input[name='fname']" ))){
                    console.error("Campo nome está em branco");
                    return false;
                }
                var doc = $( "input[name='ftype_value']").val();
                if(!Form.validateDoc("cpf",doc))
                {
                    console.error("CPF INVALIDO");
                    return false;
                }
                break;
            case "cnpj":
                if(Form.isEmpty($( "input[name='jname']" ))){
                    console.error("Campo razão social está em branco");
                    return false;
                }
                var doc = $( "input[name='jtype_value']").val();
                if(!Form.validateDoc("cnpj",doc))
                {
                    console.error("CNPJ INVALIDO");
                    return false;
                }
                break;
        }

        //console.log("Estado");
        //var abc = $(".bootstrap-select .filter-option")[0].innerText;
        //console.log(abc);
        if(Form.isEmpty($( "input[name='logradouro']" )) ||
            Form.isEmpty($( "input[name='numero']" )) ||
            Form.isEmpty($( "input[name='cidade']" )) ||
            Form.isEmpty($( "input[name='cep']" )) ||
            $(".bootstrap-select .filter-option")[0].innerText == "Estado"


            //Form.isEmpty($( "input[name='caixa_postal']" )) ||
            //Form.isEmpty($( "input[name='banco']" )) ||
            //Form.isEmpty($( "input[name='agencia']" )) ||
            //Form.isEmpty($( "input[name='conta']" ))
        )
        {
             console.error("Algo de errado não está certo");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.clients").attr('action'),
                type: "post",
                data: {
                    _token :        $( "input[name='_token']")[0].value,
                    type:           $( "input[name='type']:checked")[0].value,
                    fname:          $( "input[name='fname']")[0].value,
                    ftype_value:    $( "input[name='ftype_value']")[0].value,
                    jname:          $( "input[name='jname']")[0].value,
                    jtype_value:    $( "input[name='jtype_value']")[0].value,
                    logradouro:     $( "input[name='logradouro']")[0].value,
                    numero:         $( "input[name='numero']")[0].value,
                    complemento:    $( "input[name='complemento']")[0].value,
                    bairro:         $( "input[name='bairro']")[0].value,
                    cidade:         $( "input[name='cidade']")[0].value,
                    estado:         $(".bootstrap-select .filter-option")[0].innerText,
                    cep:            $( "input[name='cep']")[0].value,
                    caixa_postal:   $( "input[name='caixa_postal']")[0].value,
                    banco:          $( "input[name='banco']")[0].value,
                    agencia:        $( "input[name='agencia']")[0].value,
                    conta:          $( "input[name='conta']")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" })

                        $(".selectpicker[name=cliente]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');

                        window.setTimeout(function()
                        {
                            $('.selectpicker[name=cliente]').selectpicker('refresh');
                        },500);
                    }
                },
                error: function(response){
                    alert('Um erro acontenceu!');
                }
            });
            return false;
        }else {
            $("form.clients").submit();
        }

        return false;
    });

});



function createMask()
{
    // Mascaras
    var cpf = $("input[name='ftype_value']");

    var cpfmask = new Inputmask("999.999.999-99");
    cpfmask.mask(cpf)

    var cnpj = $("input[name='jtype_value']");

    var cnpjmask = new Inputmask("99.999.999/9999-99");
    cnpjmask.mask(cnpj)

    var cep = $("input[name='cep']");

    var cepmask = new Inputmask("99999-999");
    cepmask.mask(cep)
    // Fim máscaras
}