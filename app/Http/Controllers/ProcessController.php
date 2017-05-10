<?php

namespace App\Http\Controllers;

use App\Advogados;
use App\Clientes;
use App\Pericia;
use App\Processos;
use App\Tribunal;
use App\Contrario;
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

        $clientes = Clientes::all()->toArray();
        $tribunais = Tribunal::all()->toArray();
        $varas = Vara::all()->toArray();
        $advogados = Advogados::all()->toArray();
        $contrarios = Contrario::all()->toArray();
        $pericias = Pericia::all()->toArray();


        return view('process.create',[
            "clientes" => $clientes ,
            "tribunais" => $tribunais ,
            "varas" => $varas,
            "advogados" => $advogados,
            "contrarios" => $contrarios,
            "pericias" => $pericias
        ]);


    }


}
