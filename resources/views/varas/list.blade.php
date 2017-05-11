
@extends('varas.layout')

@section('title', 'Listar Varas')

@section('content')

  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Opções</th>

              </tr>
          </tfoot>
          <tbody>

              @foreach ($varas as $vara)
                  <tr>
                    <td>{{ $vara->id }}</td>
                    <td>{{ $vara->nome }}</td>
                    <td>{{ $vara->cidade }}</td>
                    <td>
                        <a href="{{ url('/varas/editar/'.$vara->id) }}"><i class="fa fa-edit"></i></a>
                        <a href="{{ url('/varas/deletar/'.$vara->id) }}"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection