
@extends('pericias.layout')

@section('title', 'Listar Perícias')

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

        @foreach ($pericias as $pericia)
            <tr>
                <td>{{ $pericia->type }}</td>
                <td>
                    <a href="{{ url('/varas/editar/'.$vara->id) }}"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/varas/deletar/'.$vara->id) }}"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection