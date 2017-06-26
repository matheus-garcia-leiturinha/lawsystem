<?php

namespace App\Http\Controllers;

use App\Recolhimento;
use Illuminate\Http\Request;

class RecolhimentoController extends Controller
{
    //

    public function listar()
    {

        $recolhimentos = Recolhimento::all();
        return view('recolhimentos.list', ['recolhimentos' => $recolhimentos ]);

    }

    public function criar()
    {

        return view('recolhimentos.create');
    }

    public function editar($id)
    {

        $recolhimento = Recolhimento::find($id)->toArray();
        return view('recolhimentos.edit', ['recolhimento' => $recolhimento ]);
    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $type = $request->input('type');


        $recolhimento = Recolhimento::find($id);

        if(!$recolhimento)
        {
            $recolhimento = new Recolhimento();
            $recolhimento->id = $id;
        }

        $recolhimento->type = $type;
        $recolhimento->save();

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $recolhimento->type;
            $return['id'] = $recolhimento->id;

            die(json_encode($return));
        }else {

            return redirect()->route('recolhimentos.listar');
        }
    }

    public function deletar($id)
    {
        $recolhimento = Recolhimento::find($id);
        $recolhimento->delete();

        return redirect()->route('recolhimentos.listar');
    }
}
