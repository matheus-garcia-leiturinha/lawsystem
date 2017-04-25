
@extends('varas.layout')

@section('title', 'Listar Varas')

@section('content')

    <a type="button" class="btn btn-primary btn-lg" href={{ url('/varas/criar') }} >Criar Vara</a>



  <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>Cidade</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Nome</th>
                  <th>Cidade</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($varas as $vara)
                  <tr>
                        <td>{{ $vara->nome }}</td>
                        <td>{{ $vara->cidade }}</td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection