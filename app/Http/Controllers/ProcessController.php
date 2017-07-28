<?php

namespace App\Http\Controllers;

use App\AdvogadoParcipanteProcesso;
use App\Advogados;
use App\ClienteProcesso;
use App\Clientes;
use App\ContrarioProcesso;
use App\Deposito;
use App\DepositoProcesso;
use App\ParticipanteProcesso;
use App\Pericia;
use App\Processos;
use App\PericiaProcesso;
use App\Recolhimento;
use App\RecolhimentoProcesso;
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

        $clientes                   = Clientes::all()->toArray();
        $tribunais                  = Tribunal::all()->toArray();
        $varas                      = Vara::all()->toArray();
        $advogados                  = Advogados::where('tipo', 1)->get()->toArray();
        $advogados_contrario        = Advogados::where('tipo', 2)->get()->toArray();
        $advogados_participantes    = Advogados::where('tipo', 3)->get()->toArray();
        $contrarios                 = Contrario::all()->toArray();
        $pericias                   = Pericia::all()->toArray();
        $depositos                  = Deposito::all()->toArray();
        $recolhimentos              = Recolhimento::all()->toArray();

        $pedidos                    = Pedidos::all()->toArray();


        return view('process.create',[
            "clientes"                  => $clientes ,
            "tribunais"                 => $tribunais ,
            "varas"                     => $varas,
            "advogados"                 => $advogados,
            "advogados_contrario"       => $advogados_contrario,
            "advogados_participantes"   => $advogados_participantes,
            "contrarios"                => $contrarios,
            "pericias"                  => $pericias,
            "depositos"                 => $depositos,
            "recolhimentos"             => $recolhimentos,
            "pedidos"                   => $pedidos,
        ]);


    }

    public function save(Request $request)
    {

        $number                 = $request->input('number');
        $polo                   = $request->input('polo');
        $value                  = $request->input('valor');
        $audiencia              = $request->input('audiencia');
        $adv_responsavel        = $request->input('adv_responsavel');
        $adv_terceiro           = $request->input('adv_terceiro');
        $ocorrencia_inaugural   = $request->input('ocorrencia_inaugural');

        if ($request->input('data_ajuizamento')) {
            $d_ajuizamento = \DateTime::createFromFormat("d/m/Y", $request->input('data_ajuizamento'))->format("m/d/Y");
            $data_ajuizamento = date("Y-m-d", strtotime($d_ajuizamento));
        } else {
            echo 'error';
        }

        if ($request->input('data_audiencia_inaugural')) {
            $d_inaugural = \DateTime::createFromFormat("d/m/Y H:i", $request->input('data_audiencia_inaugural'))->format("m/d/Y H:i");
            $data_audiencia_inaugural = date("Y-m-d H:i", strtotime($d_inaugural));
        }

        $tipo_processo      = $request->input('tipo');

        $deposito_judicial  = $request->input('deposito_judicial');

        $pericias           = $request->input('pericias');             // Se teve perícia
        $pericia            = $request->input('pericia_natureza');     // Motivo da perícia
        $value_pericia      = $request->input('pericia_honorario');    // Valor da perícia

        $depositos          = $request->input('depositos');            // Se teve deposito
        $deposito           = $request->input('deposito_motivo');      // Motivo da deposito
        $value_deposito     = $request->input('deposito_valor');       // Valor da deposito

        $recolhimentos      = $request->input('recolhimentos');        // Se teve recolhimento
        $recolhimento       = $request->input('recolhimento_motivo');  // Motivo da recolhimento
        $value_recolhimento = $request->input('recolhimento_valor');   // Valor da recolhimento


        $type_audiencia     = $request->input('type_audiencia');

        $clientes           = $request->input('cliente_id');
        $participantes      = $request->input('participante_name');
        $adv_participantes  = $request->input('adv_participante_id');
        $contrarios         = $request->input('contrario_id');

        // Criação do Processo
        $processo = new Processos();

        $processo->numero_processual    = $number;
        $processo->polo                 = $polo;
        $processo->type                 = $tipo_processo;
        $processo->valor_causa          = $value;
        $processo->data_ajuizamento     = $data_ajuizamento;
        $processo->inaugural            = $audiencia;
        $processo->pericia              = $pericias;
        $processo->adv_owner            = $adv_responsavel;
        $processo->adv_third_party      = $adv_terceiro;
        $processo->ocorrencia_inaugural = $ocorrencia_inaugural;
        $processo->deposito_judicial    = $deposito_judicial;
        $processo->type_audiencia       = $type_audiencia;

        if (isset($data_audiencia_inaugural))
            $processo->data_audiencia_inaugural = $data_audiencia_inaugural;

        $processo->save();


        foreach ($clientes as $key => $client) {
            $clienteProcesso                = new ClienteProcesso();
            $clienteProcesso->cliente_id    = $client;
            $clienteProcesso->processo_id   = $processo->id;
            $clienteProcesso->save();
        }

        if (isset($participantes))
        {
            foreach($participantes as $key=>$participante)
            {
                $participanteProcesso                = new ParticipanteProcesso();
                $participanteProcesso->participante  = $participante;
                $participanteProcesso->processo_id   = $processo->id;
                $participanteProcesso->save();
            }
        }

        if (isset($adv_participantes))
        {
            foreach($adv_participantes as $key=>$adv)
            {
                $advParticipanteProcesso                = new AdvogadoParcipanteProcesso();
                $advParticipanteProcesso->advogado_id   = $adv;
                $advParticipanteProcesso->processo_id   = $processo->id;
                $advParticipanteProcesso->save();
            }
        }

        if (isset($contrarios))
        {
            foreach($contrarios as $key=>$contrario)
            {
                $contrarioProcesso                = new ContrarioProcesso();
                $contrarioProcesso->contrario_id  = $contrario;
                $contrarioProcesso->processo_id   = $processo->id;
                $contrarioProcesso->save();
            }
        }

        // Criação das Perícias do Processo
        if($pericias == 1 && isset($pericia))
        {
            foreach($pericia as $key=>$type_pericia)
            {
                $pericia_processo                       = new PericiaProcesso();
                $pericia_processo->processo_id          = $processo->id;
                $pericia_processo->pericia_id           = $type_pericia;
                $pericia_processo->pericias_honorarios  = $value_pericia[$key];
                $pericia_processo->save();
            }
        }

        // Criação dos Depositos do Processo
        if($depositos == 1 && isset($deposito))
        {
            foreach($deposito as $key=>$type_deposito)
            {
                $pedido_processo                    = new DepositoProcesso();
                $pedido_processo->processo_id       = $processo->id;
                $pedido_processo->deposito_id       = $type_deposito;
                $pedido_processo->deposito_valor    = $value_deposito[$key];
                $pedido_processo->save();
            }
        }

        // Criação dos Recolhimentos do Processo
        if($recolhimentos == 1 && isset($recolhimento))
        {
            foreach($recolhimento as $key=>$type_recolhimento)
            {
                $recolhimento_processo                      = new RecolhimentoProcesso();
                $recolhimento_processo->processo_id         = $processo->id;
                $recolhimento_processo->recolhimento_id     = $type_recolhimento;
                $recolhimento_processo->recolhimento_valor  = $value_recolhimento[$key];
                $recolhimento_processo->save();
            }
        }

        $pedido_motivo      = $request->input('pedido_motivo');        // Pedido
        $valor_pedido       = $request->input('pedido_valor');         // Valor do pedido
        $risco_pedido       = $request->input('pedido_risco');         // Risco do pedido

        // Criação dos Peridos do Processo
        if(isset($pedido_motivo)){

            foreach($pedido_motivo as $key=>$type_pedido)
            {
                $pedido_processo                = new PedidoProcesso();
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
