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
        $type = $request->input('tipo');
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

        if(isset($type))
            $advocate->tipo = $type;

        $advocate->save();

        $request->session()->flash('alert-success', 'Advogado adicionado!');

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $advocate->nome;
            $return['id'] = $advocate->id;
            $return['type'] = $advocate->tipo;

            die(json_encode($return));
        }else
        {
            return redirect()->route('advogados.listar');
        }

    }

    public function editar($id)
    {
        $advocate = Advogados::find($id)->toArray();
        return view('advocates.edit', ['advocate' => $advocate ]);


    }

    public function deletar($id){

        $advocate = Advogados::find($id);
        $advocate->delete();

        return redirect()->route('advogados.listar');
    }


}
