<?php

namespace App\Http\Controllers;

use App\Vara;
use Illuminate\Http\Request;

class VaraController extends Controller
{


    public function listar()
    {
        $varas = Vara::all();


        return view('varas.list', ['varas' => $varas ]);

    }


    public function criar()
    {
        return view('varas.create');


    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $nome = $request->input('nome');
        $cidade = $request->input('cidade');

        $vara = new Vara();
        $vara->id = $id;
        $vara->nome = $nome;
        $vara->cidade = $cidade;
        $vara->save();

        return redirect()->route('varas.listar');


    }
}
