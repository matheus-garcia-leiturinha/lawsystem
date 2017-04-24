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
        $query = (new Clientes)->with('documents')->newQuery();


        $grid = new Grid(
            (new GridConfig)
                # Grids name used as html id, caching key, filtering GET params prefix, etc
                # If not specified, unique value based on file name & line of code will be generated
                ->setName('my_report')
                # See all supported data providers in sources
                ->setDataProvider(new EloquentDataProvider($query))
                ->setColumns([
                    # simple results numbering, not related to table PK or any obtained data
                    new IdFieldConfig,
                    (new FieldConfig)
                        ->setName('razao_social')
                        ->setLabel('Nome')
                        ->setCallback(function ($val) {
                            return "<span class='glyphicon glyphicon-user'></span>{$val}";
                        })
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                    ,
//                    (new FieldConfig)
//                        ->setName('email')
//                        ->setLabel('Email')
//                        ->setSortable(true)
//                        ->setCallback(function ($val) {
//                            $icon = '<span class="glyphicon glyphicon-envelope"></span>&nbsp;';
//                            return
//                                '<small>'
//                                . $icon
//                                . \HTML::link("mailto:$val", $val)
//                                . '</small>';
//                        })
//                        ->addFilter(
//                            (new FilterConfig)
//                                ->setOperator(FilterConfig::OPERATOR_LIKE)
//                        )
//                    ,
                    (new FieldConfig)
                        ->setName('documents.type')
                        ->setLabel('Tipo de Documento')
                        ->setSortable(true)
                        ->setCallback(function ($val) {
                            return "<span class='glyphicon glyphicon-id'></span>{$val}";
                        })
                        ->addFilter(
                            (new FilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                    ,
                    (new FieldConfig)
                        ->setName('documents.number')
                        ->setLabel('Número do Documento')
                        ->setSortable(true)
                        ->setCallback(function ($val) {
                            return "<span class='glyphicon glyphicon-id'></span>{$val}";
                        })
                        ->addFilter(
                            (new FilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                    ,
                ])
                ->setComponents([
                    # Renders table header (table>thead)
                    (new THead)
                        # Setup inherited components
                        ->setComponents([
                            (new ColumnHeadersRow),
                            # Add this if you have filters for automatic placing to this row
                            new FiltersRow,
                            # Row with additional controls
                            (new OneCellRow)
                                ->setComponents([
                                    new RecordsPerPage,
                                    new ColumnsHider,
                                    (new CsvExport)
                                        ->setFileName('my_report' . date('Y-m-d'))
                                    ,
                                    new ExcelExport(),
                                    (new HtmlTag)
                                        ->setContent('<span class="glyphicon glyphicon-refresh"></span> Filter')
                                        ->setTagName('button')
                                        ->setRenderSection(RenderableRegistry::SECTION_END)
                                        ->setAttributes([
                                            'class' => 'btn btn-success btn-sm'
                                        ])
                                ])
                                ->setComponents([
                                    new RecordsPerPage,
                                    new ColumnsHider,
                                    new ExcelExport(),
                                    (new HtmlTag)
                                        ->setContent('<span class="glyphicon glyphicon-refresh"></span> Filter')
                                        ->setTagName('button')
                                        ->setRenderSection(RenderableRegistry::SECTION_END)
                                        ->setAttributes([
                                            'class' => 'btn btn-success btn-sm'
                                        ])
                                ])
                                # Components may have some placeholders for rendering children there.
                                ->setRenderSection(THead::SECTION_BEGIN)


                        ])
                    ,
                    # Renders table footer (table>tfoot)
                    (new TFoot)
                        ->setComponents([

                            (new OneCellRow)
                                ->setComponents([
                                    new Pager,
                                    (new HtmlTag)
                                        ->setAttributes(['class' => 'pull-right'])
                                        ->addComponent(new ShowingRecords)
                                    ,
                                ])
                        ])
                ])
        );


        return view('clients.list', ['grid' => $grid ]);

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
