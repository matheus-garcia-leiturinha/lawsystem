
@extends('process.layout')

@section('title', 'Listar Processos')

@section('content')


  <table id="table" class="mdl-data-table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Número Processual</th>
                  <th>Natureza</th>
                  <th>Tribunal</th>
                  <th>Vara</th>
                  <th>Opções</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>Número Processual</th>
                  <th>Natureza</th>
                  <th>Tribunal</th>
                  <th>Vara</th>
                  <th>Opções</th>
              </tr>
          </tfoot>
          <tbody>

              @foreach ($processes as $process)
                  <tr>
                        <td>{{ $process->numero_processual }}</td>
                        <td>{{ $process->natureza }}</td>
                        <td>{{ $process->tribunal }}</td>
                        <td>{{ $process->vara }}</td>
                        <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                  </tr>
              @endforeach

          </tbody>
      </table>
@endsection