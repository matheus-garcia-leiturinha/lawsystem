<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    //


    public function listar()
    {
        $process = Processos::all();


        return view('process.list', ['process' => $process ]);

    }

}
