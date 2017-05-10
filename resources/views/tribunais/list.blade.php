
@extends('tribunais.layout')

@section('title', 'Listar Tribunais')

@section('content')


  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Estado</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($tribunais as $tribunal)
                  <tr>
                        <td>{{ $tribunal->id }}</td>
                        <td>{{ $tribunal->nome }}</td>
                        <td>{{ $tribunal->estado }}</td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection