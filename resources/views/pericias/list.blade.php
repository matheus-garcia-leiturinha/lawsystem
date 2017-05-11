
@extends('pericias.layout')

@section('title', 'Listar Perícias')

@section('content')

    <table id="table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Tipo</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Tipo</th>


        </tr>
        </tfoot>
        <tbody>

        @foreach ($pericias as $pericia)
            <tr>
                <td>{{ $pericia->type }}</td>


            </tr>
        @endforeach

        </tbody>
    </table>
@endsection