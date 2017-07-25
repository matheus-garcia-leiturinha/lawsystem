
@extends('pedidos.layout')

@section('title', 'Listar Pedidos')

@section('content')

    <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Tipo</th>
            <th>Opções</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Tipo</th>
            <th>Opções</th>


        </tr>
        </tfoot>
        <tbody>

        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->type }}</td>
                <td>
                    <a href="{{ url('/pedidos/editar/'.$pedido->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/pedidos/deletar/'.$pedido->id) }}"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection