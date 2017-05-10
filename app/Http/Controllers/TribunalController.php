<?php

namespace App\Http\Controllers;

use App\Tribunal;
use Illuminate\Http\Request;

class TribunalController extends Controller
{
    //

    public function listar()
    {
        $tribunais = Tribunal::all();


        return view('tribunais.list', ['tribunais' => $tribunais ]);

    }


    public function criar()
    {
        return view('tribunais.create');


    }

    public function editar($id)
    {
        $tribunal = Tribunal::find($id)->toArray();
        return view('tribunais.edit', ['tribunal' => $tribunal ]);


    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $nome = $request->input('nome');
        $estado = $request->input('estado');

        $tribunal = Tribunal::find($id);

        if(!$tribunal)
        {
            $tribunal = new Tribunal();
            $tribunal->id = $id;
        }

        $tribunal->nome = $nome;
        $tribunal->estado = $estado;
        $tribunal->save();

        return redirect()->route('tribunais.listar');


    }

    public function deletar($id){

        $tribunal = Tribunal::find($id);
        $tribunal->delete();

        return redirect()->route('tribunais.listar');
    }
}
