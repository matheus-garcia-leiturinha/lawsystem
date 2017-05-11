
@extends('tribunais.layout')

@section('title', 'Listar Tribunais')

@section('content')


  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

          @foreach ($tribunais as $tribunal)
              <tr>
                    <td>{{ $tribunal->id }}</td>
                    <td>{{ $tribunal->nome }}</td>
                    <td>{{ $tribunal->estado }}</td>
                    <td>
                        <a href="{{ url('/tribunais/editar/'.$tribunal->id) }}"><i class="fa fa-edit"></i></a>
                        <a href="{{ url('/tribunais/deletar/'.$tribunal->id) }}"><i class="fa fa-trash"></i></a>
                    </td>
              </tr>
          @endforeach

          </tbody>
      </table>
@endsection