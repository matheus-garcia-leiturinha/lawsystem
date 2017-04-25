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

    public function save(Request $request)
    {

        $id = $request->input('id');
        $nome = $request->input('nome');
        $estado = $request->input('estado');

        $tribunal = new Tribunal();
        $tribunal->id = $id;
        $tribunal->nome = $nome;
        $tribunal->estado = $estado;
        $tribunal->save();

        return redirect()->route('tribunais.listar');


    }
}
