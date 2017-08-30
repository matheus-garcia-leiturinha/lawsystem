<?php

namespace App\Http\Controllers;

use App\DepositoJudicial;
use Illuminate\Http\Request;

class DepositoJudicialController extends Controller
{
    //

    public function listar()
    {

        $depositos_judiciais = DepositoJudicial::all();
        return view('deposito_judicial.list', ['depositos_judiciais' => $depositos_judiciais ]);

    }

    public function criar()
    {

        return view('deposito_judicial.create');
    }

    public function editar($id)
    {

        $deposito_judicial = DepositoJudicial::find($id)->toArray();
        return view('deposito_judicial.edit', ['deposito_judicial' => $deposito_judicial ]);
    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $type = $request->input('type');


        $deposito_judicial = DepositoJudicial::find($id);

        if(!$deposito_judicial)
        {
            $deposito_judicial = new DepositoJudicial();
            $deposito_judicial->id = $id;
        }

        $deposito_judicial->type = $type;
        $deposito_judicial->save();

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $deposito_judicial->type;
            $return['id'] = $deposito_judicial->id;

            die(json_encode($return));
        }else {

            return redirect()->route('deposito_judicial.listar');
        }
    }

    public function deletar($id)
    {
        $deposito_judicial = DepositoJudicial::find($id);
        $deposito_judicial->delete();

        return redirect()->route('deposito_judicial.listar');
    }
}
