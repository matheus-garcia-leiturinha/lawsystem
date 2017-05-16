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

        if(Form.isEmpty($( "input[name='id']" )) ||
            Form.isEmpty($( "input[name='nome']" )) ||
            $(".bootstrap-select .filter-option")[0].innerText == "Estado" ||
            $( "input[name='id']" )[0].value.length != 2
        )
        {
            console.error("Algo de errado não está certo");
            return false;
        }

        $("form.tribunais").submit();
        return false;
    });

});