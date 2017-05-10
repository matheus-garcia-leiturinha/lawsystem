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

    public function editar($id)
    {
        $vara = Vara::find($id)->toArray();
        return view('varas.edit', ['vara' => $vara ]);


    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $nome = $request->input('nome');
        $cidade = $request->input('cidade');

        $vara = Vara::find($id);

        if(!$vara)
        {
            $vara = new Vara();
            $vara->id = $id;
        }



        $vara->nome = $nome;
        $vara->cidade = $cidade;

        $vara->save();

        return redirect()->route('varas.listar');


    }

    public function deletar($id){

        $vara = Vara::find($id);
        $vara->delete();

        return redirect()->route('varas.listar');
    }
}
