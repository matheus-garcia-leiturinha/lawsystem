
@extends('advocates.layout')

@section('title', 'Listar Advogados')

@section('content')

    <a type="button" class="btn btn-primary btn-lg" href={{ url('/advogados/criar') }} >Criar Advogado</a>



  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome</th>
                  <th>OAB</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($advocates as $advocate)
                  <tr>
                        <td>{{ $advocate->nome }}</td>
                        <td>{{ $advocate->oab }}</td>
                        <td>{{ $advocate->telefone }}</td>
                        <td>{{ $advocate->email }}</td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection