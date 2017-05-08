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

        $advocates = new Advogados;
        $advocates->nome = $nome;
        $advocates->oab = $oab;
        $advocates->telefone = $telefone;
        $advocates->email = $email;
        $advocates->save();

        return redirect()->route('advogados.listar');

    }


}
