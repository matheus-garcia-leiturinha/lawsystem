<?php

namespace App\Http\Controllers;

use App\Advogados;
use App\Clientes;
use App\Deposito;
use App\DepositoProcesso;
use App\Pericia;
use App\Processos;
use App\PericiaProcesso;
use App\Recolhimento;
use App\Tribunal;
use App\Contrario;
use App\Vara;
use App\Pedidos;
use App\PedidoProcesso;
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
        $depositos = Deposito::all()->toArray();
        $recolhimentos = Recolhimento::all()->toArray();

        $pedidos = Pedidos::all()->toArray();


        return view('process.create',[
            "clientes"      => $clientes ,
            "tribunais"     => $tribunais ,
            "varas"         => $varas,
            "advogados"     => $advogados,
            "contrarios"    => $contrarios,
            "pericias"      => $pericias,
            "depositos"     => $depositos,
            "recolhimentos" => $recolhimentos,
            "pedidos"       => $pedidos,
        ]);


    }

    public function save(Request $request){

        $number = $request->input('number');
        $polo = $request->input('polo');
        $value = $request->input('valor');
        $data_ajuizamento  = date("Y-m-d", strtotime($request->input('data_ajuizamento')));
        $audiencia = $request->input('audiencia');
        $contrario = $request->input('contrario');
        $cliente = $request->input('cliente');
        $adv_responsavel = $request->input('adv_responsavel');
        $adv_terceiro = $request->input('adv_terceiro');
        $data_audiencia_inaugural  = date("Y-m-d H:i", strtotime($request->input('data_audiencia_inaugural')));
        $ocorrencia_inaugural = $request->input('ocorrencia_inaugural');

        $tipo_processo      = $request->input('tipo');

        $deposito_judicial  = $request->input('deposito_judicial');

        $pericias       = $request->input('pericias');              // Se teve perícia
        $pericia        = $request->input('pericia_natureza');      // Motivo da perícia
        $value_pericia  = $request->input('pericia_honorario');     // Valor da perícia

        $depositos       = $request->input('depositos');            // Se teve deposito
        $deposito        = $request->input('deposito_motivo');      // Motivo da deposito
        $value_deposito  = $request->input('deposito_valor');       // Valor da deposito

        $pedido_motivo  = $request->input('pedido_motivo');         // Pedido
        $valor_pedido   = $request->input('pedido_valor');          // Valor do pedido
        $risco_pedido   = $request->input('pedido_risco');          // Risco do pedido

//        if($pericias == 1)
//        {
//            foreach($pericia as $key=>$type_pericia)
//            {
//                $pericia_processo = new PericiaProcesso();
//                $pericia_processo->processo_id = 1;//$processo->id;
//                $pericia_processo->pericia_id  = $type_pericia;
//                $pericia_processo->pericias_honorarios       = $value_pericia[$key];
//                $pericia_processo->save();
//
//                print_r($pericia_processo);
//
//            }
//        }
//
//        die();


        //echo "Data " . $data_ajuizamento;

        //exit();

        $processo = new Processos();

        $processo->numero_processual        = $number;
        $processo->polo                     = $polo;
        $processo->type                     = $tipo_processo;
        $processo->valor_causa              = $value;
        $processo->data_ajuizamento         = $data_ajuizamento;
        $processo->inaugural                = $audiencia;
        $processo->pericia                  = $pericias;
        $processo->contrario_id             = $contrario;
        $processo->client_id                = $cliente;
        $processo->adv_owner                = $adv_responsavel;
        $processo->adv_third_party          = $adv_terceiro;
        $processo->ocorrencia_inaugural     = $ocorrencia_inaugural;
        $processo->data_audiencia_inaugural = $data_audiencia_inaugural;
        $processo->deposito_judicial        = $deposito_judicial;

        $processo->save();


        if($pericias == 1 && isset($pericia))
        {
            foreach($pericia as $key=>$type_pericia)
            {
                $pericia_processo = new PericiaProcesso();
                $pericia_processo->processo_id          = $processo->id;
                $pericia_processo->pericia_id           = $type_pericia;
                $pericia_processo->pericias_honorarios  = $value_pericia[$key];
                $pericia_processo->save();
            }
        }

        if($depositos == 1 && isset($deposito))
        {
            foreach($deposito as $key=>$type_deposito)
            {
                $pedido_processo = new DepositoProcesso();
                $pedido_processo->processo_id       = $processo->id;
                $pedido_processo->deposito_id       = $type_deposito;
                $pedido_processo->deposito_valor    = $value_deposito[$key];
                $pedido_processo->save();
            }
        }

        if(isset($pedido_motivo)){

            foreach($pedido_motivo as $key=>$type_pedido)
            {
                $pedido_processo = new PedidoProcesso();
                $pedido_processo->processo_id   = $processo->id;
                $pedido_processo->pedido_id     = $type_pedido;
                $pedido_processo->pedido_valor  = $valor_pedido[$key];
                $pedido_processo->risco         = $risco_pedido[$key];
                $pedido_processo->save();
            }
        }

        return redirect()->route('processos.listar');

    }


}
