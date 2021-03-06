<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Documents;
use Illuminate\Http\Request;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\IdFieldConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;

use Nayjest\Grids\Components\Base\RenderableRegistry;

use Nayjest\Grids\Components\CsvExport;
use Nayjest\Grids\Components\ExcelExport;
use Nayjest\Grids\Components\OneCellRow;
use Nayjest\Grids\Components\RecordsPerPage;
use Nayjest\Grids\Components\ColumnsHider;
use Nayjest\Grids\Components\HtmlTag;
use Nayjest\Grids\Components\TotalsRow;
use Nayjest\Grids\Components\FiltersRow;
use Nayjest\Grids\Components\TFoot;
use Nayjest\Grids\Components\THead;
use Nayjest\Grids\Components\ColumnHeadersRow;
use Nayjest\Grids\Components\Laravel5\Pager;
use Nayjest\Grids\Components\ShowingRecords;

use App\User;


class ClientController extends Controller
{
    //

    public function listar()
    {
        $clients = Clientes::with('documents')->get();


        return view('clients.list', ['clients' => $clients ]);

    }


    public function criar()
    {
        return view('clients.create');


    }

    public function save(Request $request)
    {

        $type = $request->input('type');

        switch($type)
        {
            case "cpf":
                $name = $request->input('fname');
                $type_value = $request->input('ftype_value');
                break;
            case "cnpj":
                $name = $request->input('jname');
                $type_value = $request->input('jtype_value');
                break;
        }

        $logradouro = $request->input('logradouro');
        $numero = $request->input('numero');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $caixa_postal = $request->input('caixa_postal');
        $banco = $request->input('banco');
        $agencia = $request->input('agencia');
        $conta = $request->input('conta');

        $document = new Documents;
            $document->type = $type;
            $document->number = $type_value;
        $document->save();

        $client = new Clientes;
            $client->razao_social = $name;
            $client->logradouro = $logradouro;
            $client->document_id = $document->id;
            $client->cidade = $cidade;
            $client->estado = $estado;
            $client->caixa_postal = $caixa_postal;
            $client->banco = $banco;
            $client->agencia = $agencia;
            $client->conta = $conta;
        $client->save();

        return redirect()->route('clientes.listar');


    }
}
