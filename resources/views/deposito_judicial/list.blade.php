
@extends('deposito_judicial.layout')

@section('title', 'Listar Depositos Judiciais')

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

        @foreach ($depositos_judiciais as $deposito_judicial)
            <tr>
                <td>{{ $deposito_judicial->type }}</td>
                <td>
                    <a href="{{ url('/deposito_judicial/editar/'.$deposito_judicial->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/deposito_judicial/deletar/'.$deposito_judicial->id) }}"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection