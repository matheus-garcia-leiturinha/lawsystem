
$(document).ready(function(){

    createMask();

    $( "form.contrarios input[name='type']" ).on("change",function() {

       // console.log('oi',$(this).val());
        $(".doc").removeClass("checked");

        var classname = "div.doc."+$(this).val();
        $(classname).addClass("checked");

    });

    $("form.contrarios input[type=submit]").on("click", function(event){

        event.preventDefault();

        // console.log($(".bootstrap-select .filter-option")[0].innerText);

        switch($( "form.contrarios input[name='type']:checked").val())
        {
            case "cpf":
                if(Form.isEmpty($( "form.contrarios input[name='fname']" )) || Form.isEmpty($( "form.contrarios input[name='ftype_value']" )) ){
                    alert("Campo Nome ou CPF está em branco");
                    return false;
                }
                var doc = $( "form.contrarios input[name='ftype_value']").val();
                if(!Form.validateDoc("cpf",doc))
                {
                    console.error("CPF INVALIDO");
                    return false;
                }
                break;
            case "cnpj":
                if(Form.isEmpty($( "form.contrarios input[name='jname']" )) || Form.isEmpty($( "form.contrarios input[name='jtype_value']" ))){
                    alert("Campo Razão Social ou CNPF está em branco");
                    return false;
                }
                var doc = $( "form.contrarios input[name='jtype_value']").val();
                if(!Form.validateDoc("cnpj",doc))
                {
                    console.error("CNPJ INVALIDO");
                    return false;
                }
                break;
        }

        //console.log("Estado");
        //console.log($( "form.contrarios input[name='logradouro']" )[0].value);
        //console.log($( "form.contrarios input[name='numero']" )[0].value);
        //console.log($( "form.contrarios input[name='bairro']" )[0].value);
        //console.log($( "form.contrarios input[name='cidade']" )[0].value);
        //console.log($( "form.contrarios input[name='cep']" )[0].value);
        //var abc = $("form.contrarios .bootstrap-select .filter-option")[0].innerText;
        //console.log(abc);
        if(Form.isEmpty($( "form.contrarios input[name='logradouro']" )) ||
            Form.isEmpty($( "form.contrarios input[name='numero']" )) ||
            Form.isEmpty($( "form.contrarios input[name='bairro']" )) ||
            Form.isEmpty($( "form.contrarios input[name='cidade']" )) ||
            Form.isEmpty($( "form.contrarios input[name='cep']" )) ||
            $("form.contrarios .bootstrap-select .filter-option")[0].innerText == "Estado" ||
            Form.isEmpty($( "form.contrarios input[name='telefone']" )) ||
            Form.isEmpty($( "form.contrarios input[name='email']" ))

        )
        {
            alert("Preencha os dados corretamente!");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.contrarios").attr('action'),
                type: "post",
                data: {
                    _token :        $( "form.contrarios input[name='_token']")[0].value,
                    type:           $( "form.contrarios input[name='type']:checked")[0].value,
                    fname:          $( "form.contrarios input[name='fname']")[0].value,
                    ftype_value:    $( "form.contrarios input[name='ftype_value']")[0].value,
                    jname:          $( "form.contrarios input[name='jname']")[0].value,
                    jtype_value:    $( "form.contrarios input[name='jtype_value']")[0].value,
                    telefone:       $( "form.contrarios input[name='telefone']")[0].value,
                    email:          $( "form.contrarios input[name='email']")[0].value,
                    logradouro:     $( "form.contrarios input[name='logradouro']")[0].value,
                    numero:         $( "form.contrarios input[name='numero']")[0].value,
                    complemento:    $( "form.contrarios input[name='complemento']")[0].value,
                    bairro:         $( "form.contrarios input[name='bairro']")[0].value,
                    cidade:         $( "form.contrarios input[name='cidade']")[0].value,
                    estado:         $( "form.contrarios .bootstrap-select .filter-option")[0].innerText,
                    caixa_postal:   $( "form.contrarios input[name='caixa_postal']")[0].value,
                    cep:            $( "form.contrarios input[name='cep']")[0].value,
                    pis:            $( "form.contrarios input[name='pis']")[0].value,
                    ctps_numero:    $( "form.contrarios input[name='ctps_numero']")[0].value,
                    ctps_serie:     $( "form.contrarios input[name='ctps_serie']")[0].value,
                    ctps_estado:    $( "form.contrarios input[name='ctps_estado']")[0].value,
                    mae:            $( "form.contrarios input[name='mae']")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" })

                        $(".selectpicker[name=contrario]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');

                        window.setTimeout(function()
                        {
                            $('.selectpicker[name=contrario]').selectpicker('refresh');
                        },500);
                    }
                },
                error: function(response){
                    alert('Um erro acontenceu !' + response);
                }
            });
            return false;
        }else {
            $("form.contrarios").submit();
        }

        return false;
    });

});



function createMask()
{
    // Mascaras
    var cpf = $("form.contrarios input[name='ftype_value']");

    var cpfmask = new Inputmask("999.999.999-99");
    cpfmask.mask(cpf)

    var cnpj = $("form.contrarios input[name='jtype_value']");

    var cnpjmask = new Inputmask("99.999.999/9999-99");
    cnpjmask.mask(cnpj)

    var cep = $("form.contrarios input[name='cep']");

    var cepmask = new Inputmask("99999-999");
    cepmask.mask(cep)

    var telefone = $("form.contrarios input[name='telefone']");

    var telefonemask = new Inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999"]
    });
    telefonemask.mask(telefone);
    // Fim máscaras
}