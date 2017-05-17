<?php

namespace App\Http\Controllers;

use App\Contrario;
use App\Documents;
use Illuminate\Http\Request;

class ContrarioController extends Controller
{
    //

    public function listar()
    {
        $contrarios = Contrario::with('documents')->get();


        return view('contrarios.list', ['contrarios' => $contrarios ]);

    }


    public function criar()
    {
        return view('contrarios.create');


    }

    public function save(Request $request)
    {

        $type = $request->input('type');

        switch($type)
        {
            case "cpf":
                $name = $request->input('fname');
                $type_value = $request->input('ftype_value');
                break;
            case "cnpj":
                $name = $request->input('jname');
                $type_value = $request->input('jtype_value');
                break;
        }

        $contrario = Contrario::find($request->input('id'));


        if(!$contrario)
        {
            $document = new Documents;
            $contrario = new Contrario;
            $contrario->id = $request->input('id');
        }
        else{

            $document = Documents::find($contrario->document_id);
        }

        $cep = $request->input('cep');
        $logradouro = $request->input('logradouro');
        $numero = $request->input('numero');
        $complemento = $request->input('complemento');
        $bairro = $request->input('bairro');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $caixa_postal = $request->input('caixa_postal');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $pis = $request->input('pis');
        $ctps_numero = $request->input('ctps_numero');
        $ctps_serie = $request->input('ctps_serie');
        $ctps_estado = $request->input('ctps_estado');
        $nome_mae = $request->input('mae');


        $document->type = $type;
        $document->number = $type_value;
        $document->save();


        $contrario->nome = $name;
        $contrario->cep = $cep;
        $contrario->logradouro = $logradouro;
        $contrario->numero = $numero;
        $contrario->complemento = $complemento;
        $contrario->bairro = $bairro;
        $contrario->cidade = $cidade;
        $contrario->estado = $estado;
        $contrario->caixa_postal = $caixa_postal;
        $contrario->document_id = $document->id;
        $contrario->telefone = $telefone;
        $contrario->email = $email;
        $contrario->pis = $pis;
        $contrario->ctps_numero = $ctps_numero;
        $contrario->ctps_serie = $ctps_serie;
        $contrario->ctps_estado = $ctps_estado;
        $contrario->nome_mae = $nome_mae;
        $contrario->save();

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $contrario->nome;
            $return['id'] = $contrario->id;

            die(json_encode($return));
        }else {

            return redirect()->route('contrarios.listar');
        }


    }

    public function editar($id)
    {
        $contrario = Contrario::find($id)->toArray();
        $document = Documents::find($contrario['document_id'])->toArray();
        return view('contrarios.edit', ['contrario' => $contrario, 'document' => $document ]);


    }

    public function deletar($id){

        $contrario = Contrario::find($id);
        $document = Documents::find($contrario->document_id);

        $contrario->delete();
        $document->delete();

        return redirect()->route('contrarios.listar');
    }
}
