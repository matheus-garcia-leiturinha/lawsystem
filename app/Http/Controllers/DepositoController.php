<?php

namespace App\Http\Controllers;

use App\Deposito;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    //

    public function listar()
    {

        $depositos = Deposito::all();
        return view('depositos.list', ['depositos' => $depositos ]);

    }

    public function criar()
    {

        return view('depositos.create');
    }

    public function editar($id)
    {

        $deposito = Deposito::find($id)->toArray();
        return view('depositos.edit', ['deposito' => $deposito ]);
    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $type = $request->input('type');


        $deposito = Deposito::find($id);

        if(!$deposito)
        {
            $deposito = new Deposito();
            $deposito->id = $id;
        }

        $deposito->type = $type;
        $deposito->save();

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $deposito->type;
            $return['id'] = $deposito->id;

            die(json_encode($return));
        }else {

            return redirect()->route('depositos.listar');
        }
    }

    public function deletar($id)
    {
        $deposito = Deposito::find($id);
        $deposito->delete();

        return redirect()->route('depositos.listar');
    }
}
