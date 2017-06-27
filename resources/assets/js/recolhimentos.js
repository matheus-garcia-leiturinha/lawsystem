$(document).ready(function(){

    $("form.recolhimentos input[type=submit]").on("click", function(event){

        event.preventDefault();


        //console.log($( "input[name='id']")[0].value);


        if(Form.isEmpty($( "form.recolhimentos input[name='type']" ))

        )
        {
            alert("Preencha o dado corretamente!");
            return false;
        }

        if($(this).parent().parent().hasClass('modal-body'))
        {

            $.ajax({
                url:  $("form.recolhimentos").attr('action'),
                type: "post",
                data: {
                    _token :        $( "form.recolhimentos input[name='_token']")[0].value,
                    type:           $( "form.recolhimentos input[name='type']")[0].value
                },
                success: function(data){ // What to do if we succeed
                    response = JSON.parse(data);
                    if(response['status'] == "OK"){
                        alert(response['message']);
                        $("[data-dismiss=modal]").trigger({ type: "click" })

                        $(".selectpicker[name=recolhimento]").append('<option title="'+response['name']+'" value="'+response['id']+'">'+response['name']+'</option>');

                        window.setTimeout(function()
                        {
                            $('.selectpicker[name=recolhimento]').selectpicker('refresh');
                        },500);
                    }
                },
                error: function(response){
                    alert('Um erro acontenceu !' + response);
                }
            });
            return false;
        }else {
            $("form.recolhimentos").submit();
        }
        return false;
    });

});