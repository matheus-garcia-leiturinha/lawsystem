$(document).ready(function(){

    $("form.pericias input[type=submit]").on("click", function(event){

        event.preventDefault();


        //console.log($( "input[name='id']")[0].value);


        if(Form.isEmpty($( "form.pericias input[name='type']" ))

        )
        {
            console.error("Algo de errado não está certo");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.pericias").attr('action'),
                type: "post",
                data: {
                    _token :        $( "form.pericias input[name='_token']")[0].value,
                    type:           $( "form.pericias input[name='type']:checked")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" })

                        $(".selectpicker[name=pericia]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');

                        window.setTimeout(function()
                        {
                            $('.selectpicker[name=pericia]').selectpicker('refresh');
                        },500);
                    }
                },
                error: function(response){
                    alert('Um erro acontenceu !' + response);
                }
            });
            return false;
        }else {
            $("form.pericias").submit();
        }
        return false;
    });

});