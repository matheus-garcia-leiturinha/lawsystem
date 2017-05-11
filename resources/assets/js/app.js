
require('./datatables');

$(document).ready(function(){

    //$('#table').DataTable();

    $('#table').dataTable( {
        "language": {
            "emptyTable": "Você não possui informações nesse cadastro"
        },
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]

    });



});


String.prototype.escapeRegExp = function(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

String.prototype.replaceAll =  function(str, find, replace) {
    return str.replace(new RegExp(String.prototype.escapeRegExp(find), 'g'), replace);
}

Form =
{

    isEmpty : function(resource)
    {
        if( !resource.val() )
            return true;

        return false;
    },

    validateEmail : function(email)
    {


        var emailValido = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/;

        if(!emailValido.test(email)){
            console.log("Entrou");
            return false;
        }

        return true;

    },

    validateDoc : function(type,number)
    {

        number = String.prototype.replaceAll(number,'.', '');
        number = String.prototype.replaceAll(number,'-','');
        number = String.prototype.replaceAll(number,'/','');

        console.log(number);
        if(type == 'cpf'){

            var Soma;
            var Resto;
            Soma = 0;
            if (number == "00000000000" ||
                number == "11111111111" ||
                number == "22222222222" ||
                number == "33333333333" ||
                number == "44444444444" ||
                number == "55555555555" ||
                number == "66666666666" ||
                number == "77777777777" ||
                number == "88888888888" ||
                number == "99999999999"
            ) return false;

            for (i=1; i<=9; i++) Soma = Soma + parseInt(number.substring(i-1, i)) * (11 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(number.substring(9, 10)) ) return false;

            Soma = 0;
            for (i = 1; i <= 10; i++) Soma = Soma + parseInt(number.substring(i-1, i)) * (12 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(number.substring(10, 11) ) ) return false;
            return true;
            
        }
        else{

            number = number.replace(/[^\d]+/g,'');

            if(number == '') return false;

            if (number.length != 14)
                return false;

            // Elimina numbers invalidos conhecidos
            if (number == "00000000000000" ||
                number == "11111111111111" ||
                number == "22222222222222" ||
                number == "33333333333333" ||
                number == "44444444444444" ||
                number == "55555555555555" ||
                number == "66666666666666" ||
                number == "77777777777777" ||
                number == "88888888888888" ||
                number == "99999999999999")
                return false;

            // Valida DVs
            tamanho = number.length - 2
            numeros = number.substring(0,tamanho);
            digitos = number.substring(tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0))
                return false;

            tamanho = tamanho + 1;
            numeros = number.substring(0,tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1))
                return false;

            return true;
        }
        return false;
    }

}