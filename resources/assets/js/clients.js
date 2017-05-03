/**
 * Created by matheus garcia on 24/04/2017.
 */


$(document).ready(function(){


    // Clients Document Ready

    createMask();

});

function createMask()
{
    // Mascaras
    var cpf = $("input[name='ftype_value']");

    var cpfmask = new Inputmask("999.999.999-99");
    cpfmask.mask(cpf)

    var cnpj = $("input[name='jtype_value']");

    var cnpjmask = new Inputmask("99.999.999/9999-99");
    cnpjmask.mask(cnpj)
    // Fim máscaras
}