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

    $("input[type=submit]").on("click", function(event){

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
        var abc = $(".bootstrap-select .filter-option")[0].innerText;
        console.log(abc);
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

        $("form").submit();
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