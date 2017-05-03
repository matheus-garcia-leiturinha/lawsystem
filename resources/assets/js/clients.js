/**
 * Created by matheus garcia on 24/04/2017.
 */


$(document).ready(function(){


    $( "input[name='type']" ).on("change",function() {

       $(".doc").removeClass("checked");

       var classname = "div.doc."+$(this).val();
       $(classname).addClass("checked");
    });

    $('form').on("submit", function(event){

        event.preventDefault();


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

        if(Form.isEmpty($( "input[name='logradouro']" )) ||
            Form.isEmpty($( "input[name='numero']" )) ||
            Form.isEmpty($( "input[name='cidade']" )) ||
            Form.isEmpty($( "input[name='estado']" )) ||
            Form.isEmpty($( "input[name='caixa_postal']" )) ||
            Form.isEmpty($( "input[name='banco']" )) ||
            Form.isEmpty($( "input[name='agencia']" )) ||
            Form.isEmpty($( "input[name='conta']" ))
        )
        {
             console.error("Algo de errado não está certo");
        }


        return false;
    });



});