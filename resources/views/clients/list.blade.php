
@extends('clients.layout')

@section('title', 'Listar Clientes')

@section('content')

  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome / Razão Social</th>
                  <th>Logradouro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Tipo do Documento</th>
                  <th>Documento</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome / Razão Social</th>
                  <th>Logradouro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Tipo do Documento</th>
                  <th>Documento</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($clients as $client)
                  <tr>
                        <td>{{ $client->razao_social }}</td>
                        <td>{{ $client->logradouro }}</td>
                        <td>{{ $client->cidade }}</td>
                        <td>{{ $client->estado }}</td>
                        <td>{{ $client->documents->type }}</td>
                        <td>{{ $client->documents->number }}</td>
                        <td>
                            <a href="{{ url('/clientes/editar/'.$client->id) }}"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('/clientes/deletar/'.$client->id) }}"><i class="fa fa-trash"></i></a>
                        </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection