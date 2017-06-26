
@extends('depositos.layout')

@section('title', 'Listar Depositos')

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

        @foreach ($depositos as $deposito)
            <tr>
                <td>{{ $deposito->type }}</td>
                <td>
                    <a href="{{ url('/depositos/editar/'.$deposito->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/depositos/deletar/'.$deposito->id) }}"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection