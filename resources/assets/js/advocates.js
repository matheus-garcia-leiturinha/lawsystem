/**
 * Created by matheus garcia on 24/04/2017.
 */

$(document).ready(function(){


    adv_createMask();

    $("form.advocates input[type=submit]").on("click", function(event){

        event.preventDefault();

       //console.log($( "form.advocates input[name='nome']")[0].value);
      //  !Form.validateEmail($( "form.advocates input[name='email']" )[0].value)


        if(Form.isEmpty($( "form.advocates input[name='nome']" )) ||
            Form.isEmpty($( "form.advocates input[name='oab']" ))
        )

        {
            alert("Preencha os dados corretamente!");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.advocates").attr('action'),
                type: "post",
                data: {
                    _token :    $( "form.advocates input[name='_token']")[0].value,
                    nome:       $( "form.advocates input[name='nome']")[0].value,
                    tipo:       $( "form.advocates input[name='tipo']:checked")[0].value,
                    oab:        $( "form.advocates input[name='oab']")[0].value,
                    telefone:   $( "form.advocates input[name='telefone']")[0].value,
                    email:      $( "form.advocates input[name='email']")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" })

                        console.log(parseInt(response['type']));

                        switch(parseInt(response['type']))
                        {
                            case 1:
                                $(".selectpicker[name=adv_responsavel]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');
                                break;
                            case 2:
                                $(".selectpicker[name=adv_terceiro]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');
                                break;
                            case 3:
                                $(".selectpicker[name=adv_participante]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');
                                break;
                        }

                        window.setTimeout(function()
                        {
                            $('.selectpicker[name=adv_responsavel]').selectpicker('refresh');
                            $('.selectpicker[name=adv_terceiro]').selectpicker('refresh');
                            $('.selectpicker[name=adv_participante]').selectpicker('refresh');
                        },500);
                    }
                },
                error: function(response){
                    alert('Um erro acontenceu!');
                }
            });
            return false;
        }else
        {
            $("form.advocates").submit();
        }

        return false;
    });

});



function adv_createMask()
{
    // Mascaras
    var telefone = $("form.advocates input[name='telefone']");

    var telefonemask = new Inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999"]
    });
    telefonemask.mask(telefone);




    // Fim máscaras
}