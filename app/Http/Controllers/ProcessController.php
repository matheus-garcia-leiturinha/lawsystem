<?php

namespace App\Http\Controllers;

use App\Processos;
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
        return view('process.create');


    }


}
