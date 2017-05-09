
@extends('varas.layout')

@section('title', 'Listar Varas')

@section('content')

    <a type="button" class="btn btn-primary btn-lg" href={{ url('/varas/criar') }} >Criar Vara</a>



  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número</th>
                  <th>Nome</th>
                  <th>Cidade</th>
                  <th>Ações</th>

              </tr>
          </tfoot>
          <tbody>

              @foreach ($varas as $vara)
                  <tr>
                        <td>{{ $vara->id }}</td>
                        <td>{{ $vara->nome }}</td>
                        <td>{{ $vara->cidade }}</td>
                        <td></td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection