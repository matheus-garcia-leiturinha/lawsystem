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

        switch($( "form.clients input[name='type']:checked").val())
        {
            case "cpf":
                if(Form.isEmpty($( "form.clients input[name='fname']" ))){
                    console.error("Campo nome está em branco");
                    return false;
                }
                var doc = $( "form.clients input[name='ftype_value']").val();
                if(!Form.validateDoc("cpf",doc))
                {
                    console.error("CPF INVALIDO");
                    return false;
                }
                break;
            case "cnpj":
                if(Form.isEmpty($( "form.clients input[name='jname']" ))){
                    console.error("Campo razão social está em branco");
                    return false;
                }
                var doc = $( "form.clients input[name='jtype_value']").val();
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
        if(Form.isEmpty($( "form.clients input[name='logradouro']" )) ||
            Form.isEmpty($( "form.clients input[name='numero']" )) ||
            Form.isEmpty($( "form.clients input[name='cidade']" )) ||
            Form.isEmpty($( "form.clients input[name='cep']" )) ||
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
                    _token :        $( "form.clients input[name='_token']")[0].value,
                    type:           $( "form.clients input[name='type']:checked")[0].value,
                    fname:          $( "form.clients input[name='fname']")[0].value,
                    ftype_value:    $( "form.clients input[name='ftype_value']")[0].value,
                    jname:          $( "form.clients input[name='jname']")[0].value,
                    jtype_value:    $( "form.clients input[name='jtype_value']")[0].value,
                    email:    $( "form.clients input[name='email']")[0].value,
                    telefone:    $( "form.clients input[name='telefone']")[0].value,
                    contato:    $( "form.clients input[name='contato']")[0].value,
                    logradouro:     $( "form.clients input[name='logradouro']")[0].value,
                    numero:         $( "form.clients input[name='numero']")[0].value,
                    complemento:    $( "form.clients input[name='complemento']")[0].value,
                    bairro:         $( "form.clients input[name='bairro']")[0].value,
                    cidade:         $( "form.clients input[name='cidade']")[0].value,
                    estado:         $( "form.clients .bootstrap-select .filter-option")[0].innerText,
                    cep:            $( "form.clients input[name='cep']")[0].value,
                    caixa_postal:   $( "form.clients input[name='caixa_postal']")[0].value,
                    banco:          $( "form.clients input[name='banco']")[0].value,
                    agencia:        $( "form.clients input[name='agencia']")[0].value,
                    conta:          $( "form.clients input[name='conta']")[0].value
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
    var cpf = $("form.clients input[name='ftype_value']");

    var cpfmask = new Inputmask("999.999.999-99");
    cpfmask.mask(cpf)

    var cnpj = $("form.clients input[name='jtype_value']");

    var cnpjmask = new Inputmask("99.999.999/9999-99");
    cnpjmask.mask(cnpj)

    var cep = $("form.clients input[name='cep']");

    var cepmask = new Inputmask("99999-999");
    cepmask.mask(cep)

    var telefone = $("form.clients input[name='telefone']");

    var telefonemask = new Inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999"]
    });
    telefonemask.mask(telefone);
    // Fim máscaras
}