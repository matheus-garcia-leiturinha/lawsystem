<?php

namespace App\Http\Controllers;

use App\Advogados;
use Illuminate\Http\Request;

class AdvocatesController extends Controller
{
    //

    public function listar()
    {
        $advocates = Advogados::all();


        return view('advocates.list', ['advocates' => $advocates ]);

    }


    public function criar()
    {
        return view('advocates.create');


    }

    public function save(Request $request)
    {

        $nome = $request->input('nome');
        $oab = $request->input('oab');
        $telefone = $request->input('telefone');
        $email = $request->input('email');

        $advogado = new Advogados();
        $advogado->nome = $nome;
        $advogado->oab = $oab;
        $advogado->telefone = $telefone;
        $advogado->email = $email;
        $advogado->save();

        return redirect()->route('advogados.listar');


    }
}
