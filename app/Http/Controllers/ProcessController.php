<?php

namespace App\Http\Controllers;

use App\Advogados;
use App\Processos;
use App\Tribunal;
use App\Vara;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    //


    public function listar()
    {
        $process = Processos::all();


        return view('process.list', ['processes' => $process ]);

    }


    public function criar()
    {

        $tribunais = Tribunal::all()->toArray();
        $varas = Vara::all()->toArray();
        $advogados = Advogados::all()->toArray();

        return view('process.create',[
            "tribunais" => $tribunais ,
            "varas" => $varas,
            "advogados" => $advogados
        ]);


    }


}
