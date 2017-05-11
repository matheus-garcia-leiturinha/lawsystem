<?php

namespace App\Http\Controllers;

use App\Pericia;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    //

    public function listar()
    {

        $pericias = Pericia::all();
        return view('pericias.list', ['pericias' => $pericias ]);

    }

    public function criar()
    {

        return view('pericias.create');
    }

    public function editar($id)
    {

        $pericia = Pericia::find($id)->toArray();
        return view('pericias.edit', ['pericia' => $pericia ]);
    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $type = $request->input('type');


        $pericia = Pericia::find($id);

        if(!$pericia)
        {
            $pericia = new Pericia();
            $pericia->id = $id;
        }

        $pericia->type = $type;
        $pericia->save();

        return redirect()->route('pericias.listar');
    }

    public function deletar($id)
    {
        $pericia = Pericia::find($id);
        $pericia->delete();

        return redirect()->route('pericias.listar');
    }
}
