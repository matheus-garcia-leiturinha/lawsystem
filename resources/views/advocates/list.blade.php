
@extends('advocates.layout')

@section('title', 'Listar Advogados')

@section('content')


  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($advocates as $advocate)
                  <tr>
                        <td>{{ $advocate->nome }}</td>
                        <td>{{ $advocate->oab }}</td>
                        <td>{{ $advocate->telefone }}</td>
                        <td>{{ $advocate->email }}</td>
                        <td>
                            <a href="{{ url('/advogados/editar/'.$advocate->id) }}"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('/advogados/deletar/'.$advocate->id) }}"><i class="fa fa-trash"></i></a>
                        </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection