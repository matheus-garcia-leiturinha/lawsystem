
@extends('recolhimentos.layout')

@section('title', 'Listar Recolhimentos')

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

        @foreach ($recolhimentos as $recolhimento)
            <tr>
                <td>{{ $recolhimento->type }}</td>
                <td>
                    <a href="{{ url('/recolhimentos/editar/'.$recolhimento->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/recolhimentos/deletar/'.$recolhimento->id) }}"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection