<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;

class PedidoController extends Controller
{
    //

    public function listar()
    {

        $pedidos = Pedidos::all();
        return view('pedidos.list', ['pedidos' => $pedidos ]);

    }

    public function criar()
    {

        return view('pedidos.create');
    }

    public function editar($id)
    {

        $pedido = Pedidos::find($id)->toArray();
        return view('pedidos.edit', ['pedido' => $pedido ]);
    }

    public function save(Request $request)
    {

        $id = $request->input('id');
        $type = $request->input('type');


        $pedido = Pedidos::find($id);

        if(!$pedido)
        {
            $pedido = new Pedidos();
            $pedido->id = $id;
        }

        $pedido->type = $type;
        $pedido->save();

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            /* special ajax here */
            $return = [];

            $return['status'] = "OK";
            $return['message'] = "Cadastro Efetuado com sucesso!";
            $return['name'] = $pedido->type;
            $return['id'] = $pedido->id;

            die(json_encode($return));
        }else {

            return redirect()->route('pedidos.listar');
        }
    }

    public function deletar($id)
    {
        $pedido = Pedidos::find($id);
        $pedido->delete();

        return redirect()->route('pedidos.listar');
    }
}
