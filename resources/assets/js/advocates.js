/**
 * Created by matheus garcia on 24/04/2017.
 */

$(document).ready(function(){


    createMask();

    $("form.advocates input[type=submit]").on("click", function(event){

        event.preventDefault();

       console.log($( "input[name='nome']")[0].value);
       console.log($( "input[name='oab']")[0].value);
       console.log($( "input[name='telefone']")[0].value);
       console.log($( "input[name='email']")[0].value);


        if(Form.isEmpty($( "input[name='nome']" )) ||
            Form.isEmpty($( "input[name='oab']" )) ||
            Form.isEmpty($( "input[name='telefone']" )) ||
            !Form.validateEmail($( "input[name='email']" )[0].value)
        )
        {
            console.error("Algo de errado não está certo");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.advocates").attr('action'),
                type: "post",
                data: {
                    _token :    $( "input[name='_token']")[0].value,
                    nome:       $( "input[name='nome']")[0].value,
                    nome:       $( "input[name='nome']")[0].value,
                    oab:        $( "input[name='oab']")[0].value,
                    telefone:   $( "input[name='telefone']")[0].value,
                    email:      $( "input[name='email']")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" });
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



function createMask()
{
    // Mascaras
    var telefone = $("input[name='telefone']");

    var telefonemask = new Inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999"]
    });
    telefonemask.mask(telefone);




    // Fim máscaras
}