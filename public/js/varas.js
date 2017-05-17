/**
 * Created by Pedro on 08/05/2017.
 */

$(document).ready(function(){



    $("form.varas input[type=submit]").on("click", function(event){

        event.preventDefault();

        console.log($( "input[name='id']" )[0].value.length);

        if(Form.isEmpty($( "input[name='id']" )) ||
            Form.isEmpty($( "input[name='nome']" )) ||
            Form.isEmpty($( "input[name='cidade']" )) ||
            $( "input[name='id']" )[0].value.length != 4
        )
        {
            console.error("Algo de errado não está certo");
            return false;
        }

        $("form.varas").submit();
        return false;
    });

});