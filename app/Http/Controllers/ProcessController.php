<?php

namespace App\Http\Controllers;

use App\Advogados;
use App\Clientes;
use App\Pericia;
use App\Processos;
use App\PericiaProcesso;
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
        $depositos = Pericia::all()->toArray();
        $custos = Pericia::all()->toArray();


        return view('process.create',[
            "clientes" => $clientes ,
            "tribunais" => $tribunais ,
            "varas" => $varas,
            "advogados" => $advogados,
            "contrarios" => $contrarios,
            "pericias" => $pericias,
            "depositos" => $depositos,
            "custos" => $custos,
        ]);


    }

    public function save(Request $request){

        $number = $request->input('number');
        $polo = $request->input('polo');
        $value = $request->input('valor');
        //$teste_data = explode('-',$request->input('data_ajuizamento') );
        //$last_date = explode(' ',$teste_data[2]);
        //$data_ajuizamento = $teste_data[0]. '-'. $teste_data[1]. '-'. $
        $data_ajuizamento  = date("Y-m-d h:i", strtotime($request->input('data_ajuizamento')));
        //$data_ajuizamento = $request->input('data_ajuizamento');
        $audiencia = $request->input('audiencia');
        $contrario = $request->input('contrario');
        $cliente = $request->input('cliente');
        $adv_responsavel = $request->input('adv_responsavel');
        $adv_terceiro = $request->input('adv_terceiro');
        $data_ocorrencia_inaugural  = date("Y-m-d h:i", strtotime($request->input('data_ocorrencia_inaugural')));
        //$data_ocorrencia_inaugural = $request->input('data_ocorrencia_inaugural');
        $ocorrencia_inaugural = $request->input('ocorrencia_inaugural');

        $pericias = $request->input('pericias');            // Se teve perícia
        $pericia = $request->input('pericia_natureza');              // Motivo da perícia
        $value_pericia = $request->input('pericia_honorario');  // Valor da perícia

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

        $processo->numero_processual = $number;
        $processo->polo = $polo;
        $processo->valor_causa = $value;
        $processo->data_ajuizamento = $data_ajuizamento;
        $processo->inaugural = $audiencia;
        $processo->pericia = $pericias;
        $processo->contrario_id = $contrario;
        $processo->client_id = $cliente;
        $processo->adv_owner = $adv_responsavel;
        $processo->adv_third_party = $adv_terceiro;
        $processo->ocorrencia_inaugural = $ocorrencia_inaugural;
        $processo->data_audiencia_inaugural = $data_ocorrencia_inaugural;

        $processo->save();


        if($pericias == 1)
        {
            foreach($pericia as $key=>$type_pericia)
            {
                $pericia_processo = new PericiaProcesso();
                $pericia_processo->processo_id      = $processo->id;
                $pericia_processo->pericia_id       = $type_pericia;
                $pericia_processo->pericias_honorarios = $value_pericia[$key];
                $pericia_processo->save();
            }
        }


    }


}
