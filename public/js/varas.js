/**
 * Created by Pedro on 08/05/2017.
 */

$(document).ready(function(){



    $("form.varas input[type=submit]").on("click", function(event){

        event.preventDefault();

        console.log($( "form.varas input[name='id']" )[0].value.length);

        if(Form.isEmpty($( "form.varas input[name='id']" )) ||
            Form.isEmpty($( "form.varas input[name='nome']" )) ||
            Form.isEmpty($( "form.varas input[name='cidade']" )) ||
            $( "form.varas input[name='id']" )[0].value.length != 4
        )
        {
            alert("Preencha o dado corretamente!");
            return false;
        }

        $("form.varas").submit();
        return false;
    });

});