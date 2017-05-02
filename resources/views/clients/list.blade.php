
@extends('clients.layout')

@section('title', 'Listar Clientes')

@section('content')

    <a type="button" class="btn btn-primary btn-lg" href={{ url('/clientes/criar') }} >Criar Cliente</a>



  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome / Razão Social</th>
                  <th>Logradouro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Tipo do Documento</th>
                  <th>Documento</th>
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
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection