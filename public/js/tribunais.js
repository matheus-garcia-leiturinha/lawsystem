$(document).ready(function(){

    $("form.tribunais input[type=submit]").on("click", function(event){

        event.preventDefault();


       //console.log($( "input[name='id']")[0].value);
       //console.log($( "input[name='nome']")[0].value);
        var abc = $(".bootstrap-select .filter-option")[0].innerText;
        console.log(abc);

        //var txt   = document.getElementsByName('id').value;
        //var n     = txt.length();
        //
        //console("id " + n);

        console.log($( "input[name='id']" )[0].value.length);

        if(Form.isEmpty($( "form.tribunais input[name='id']" )) ||
            Form.isEmpty($( "form.tribunais input[name='nome']" )) ||
            $("form.tribunais .bootstrap-select .filter-option")[0].innerText == "Estado" ||
            $( "form.tribunais input[name='id']" )[0].value.length != 2
        )
        {
            alert("Preencha o dado corretamente!");
            return false;
        }

        $("form.tribunais").submit();
        return false;
    });

});