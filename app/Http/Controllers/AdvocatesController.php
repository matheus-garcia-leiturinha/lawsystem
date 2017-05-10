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

        $advocate = Advogados::find($request->input('id'));

        if(!$advocate)
        {
            $advocate = new Advogados();
            $advocate->id = $request->input('id');
        }

        $advocate->nome = $nome;
        $advocate->oab = $oab;
        $advocate->telefone = $telefone;
        $advocate->email = $email;
        $advocate->save();

        return redirect()->route('advogados.listar');

    }

    public function editar($id)
    {
        $advocate = Advogados::find($id)->toArray();
        return view('advocates.edit', ['advocate' => $advocate ]);


    }

    public function deletar($id){

        $advocate = Advogados::find($id);
        $advocate->delete();
    }


}
