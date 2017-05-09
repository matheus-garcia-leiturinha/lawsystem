/**
 * Created by matheus garcia on 24/04/2017.
 */

$(document).ready(function(){


    createMask();

    $("input[type=submit]").on("click", function(event){

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



        $("form").submit();
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