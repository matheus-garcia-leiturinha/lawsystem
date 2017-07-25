
@extends('process.layout')

@section('title', 'Criar Processos')

@section('content')
    {{ Form::open(array('url' => 'processos/save',"class" => "processos")) }}




        <div class="clientes-component">
            <div class="block cliente">
                {{ Form::label('cliente', 'Cliente') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_client">Criar novo</a>
                 <select class="selectpicker" data-live-search=true title=" " name="cliente" id="cliente">
                    @foreach($clientes as $client)
                        <option title="{{$client['razao_social']}}" value="{{$client['id']}}">{{$client['razao_social']}}</option>
                    @endforeach
                 </select>
            </div>

            <div class="block cliente">
                <a onclick="processo.add('cliente');">Adicionar</a>
            </div>
        </div>

        <div class="participantes-component">
            <div class="block participante">
                {{ Form::label('participante', 'Participante') }}
                {{ Form::text('participante', '',["class" => "form-control"]) }}
            </div>

            <div class="block participante">
                <a onclick="processo.add('participante');">Adicionar</a>
            </div>
        </div>



        <div class="block">

            {{ Form::label('', 'Polo') }}

            <div class="polos">
                {{ Form::radio('polo', '1', ['checked' => 'checked'],['id'=> 'ativo']) }}
                {{ Form::label('ativo', 'Ativo',['class'=> 'radio first','checked' => 'checked']) }}
                {{ Form::radio('polo', '2',false,['id'=> 'passivo']) }}
                {{ Form::label('passivo', 'Passivo',['class'=> 'radio']) }}
            </div>

        </div>

        <div class="block">

            {{ Form::label('', 'Tipo do Processo') }}

            <div class="tipos">
                {{ Form::radio('tipo', '1', ['checked' => 'checked'],['id'=> 'administrativo']) }}
                {{ Form::label('administrativo', 'Administrativo',['class'=> 'radio first column1','checked' => 'checked']) }}
                {{ Form::radio('tipo', '2',false,['id'=> 'cívil']) }}
                {{ Form::label('cívil', 'Cívil',['class'=> 'radio column1']) }}
            </div>

        </div>

        <div class="block">

            <div class="tipos">
                {{ Form::radio('tipo', '3',false,['id'=> 'criminal']) }}
                {{ Form::label('criminal', 'Criminal',['class'=> 'first radio']) }}
                {{ Form::radio('tipo', '4',false,['id'=> 'trabalhista']) }}
                {{ Form::label('trabalhista', 'Trabalhista',['class'=> 'radio']) }}
            </div>

        </div>

        <div class="block">

            <div class="tipos">
                {{ Form::radio('tipo', '5',false,['id'=> 'tributário']) }}
                {{ Form::label('tributário', 'Tributário',['class'=> 'first radio']) }}

            </div>

        </div>

        <div class="block">
            {{ Form::label('adv_responsavel', 'Quem abriu o processo?') }}

            <a class="create-new" data-toggle="modal" data-target="#modal_adv">Criar novo</a>
             <select class="selectpicker" data-live-search=true title=" " name="adv_responsavel" id="adv_responsavel">
                @foreach($advogados as $adv)
                    <option title="{{$adv['nome']}}" value="{{$adv['id']}}">{{$adv['nome']}}</option>
                @endforeach
             </select>

        </div>

        <div class="block">
            {{ Form::label('number', 'Número do processo') }}
            {{ Form::text('number', '',["class" => "form-control"]) }}
        </div>

        <div class="block">
            {{ Form::label('adv_terceiro', 'Advogado contrário') }}
            <a class="create-new" data-toggle="modal" data-target="#modal_adv">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="adv_terceiro" id="adv_terceiro">
                @foreach($advogados_contrario as $adv)
                    <option title="{{$adv['nome']}}" value="{{$adv['id']}}">{{$adv['nome']}}</option>
                @endforeach
            </select>
        </div>


        <div class="block">
            {{ Form::label('contrario', 'Parte contrária') }}
            <a class="create-new" data-toggle="modal" data-target="#modal_contrario">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="contrario" id="contrario">
                @foreach($contrarios as $contrario)
                    <option title="{{$contrario['nome']}}" value="{{$contrario['id']}}">{{$contrario['nome']}}</option>
                @endforeach
            </select>
        </div>



        <div class="block">
            {{ Form::label('valor', 'Valor da causa') }}
            {{ Form::number('valor', '',["class" => "form-control"]) }}
        </div>

        <div class="block datepickerblock" id="date">
            {{ Form::label('data_ajuizamento', 'Data do Ajuizamento') }}
            {{ Form::text('data_ajuizamento', '',["class" => "date form-control",'id' => 'datetimepicker']) }}
        </div>

        <div class="block">

            {{ Form::label('', 'Audiência inaugural') }}

            <div class="audiencias">
                {{ Form::radio('audiencia', 1, false,['id'=> 'true']) }}
                {{ Form::label('true', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('audiencia', 2,['checked' => 'checked'],['id'=> 'false']) }}
                {{ Form::label('false', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="block datepickerblock data_audiencia_inaugural">
            {{ Form::label('data_audiencia_inaugural', 'Data da audiência inaugural') }}
            {{ Form::text('data_audiencia_inaugural', '',["class" => "date form-control",'id' => 'datetimepicker2']) }}
        </div>

        <div class="block">

            {{ Form::label('', 'Motivo de perícia') }}

            <div class="pericias">
                {{ Form::radio('pericias', 1, false,['id'=> 'true1']) }}
                {{ Form::label('true1', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('pericias', 2,['checked' => 'checked'],['id'=> 'false1']) }}
                {{ Form::label('false1', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="pericias-component">
            <div class="block pericia">
                {{ Form::label('pericia', 'Natureza da pericia') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_pericia">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="pericia" id="pericia">
                    @foreach($pericias as $pericia)
                        <option title="{{$pericia['type']}}" value="{{$pericia['id']}}">{{$pericia['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block pericia">
                {{ Form::label('value_pericia', 'Honorários prévios de perícia') }}
                {{ Form::number('value_pericia', '',["class" => "form-control"]) }}
            </div>

            <div class="block pericia">
                <a onclick="processo.add('pericia');">Adicionar</a>
            </div>
        </div>

        <div class="block">

            {{ Form::label('', 'Depósito') }}

            <div class="depositos">
                {{ Form::radio('depositos', 1, false,['id'=> 'true2']) }}
                {{ Form::label('true2', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('depositos', 2,['checked' => 'checked'],['id'=> 'false2']) }}
                {{ Form::label('false2', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="depositos-component">
            <div class="block deposito">
                {{ Form::label('deposito', 'Motivo do deposito') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_deposito">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="deposito" id="deposito">
                    @foreach($depositos as $deposito)
                        <option title="{{$deposito['type']}}" value="{{$deposito['id']}}">{{$deposito['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block deposito">
                {{ Form::label('value_deposito', 'Valor do depósito') }}
                {{ Form::number('value_deposito', '',["class" => "form-control"]) }}
            </div>

            <div class="block deposito">
                <a onclick="processo.add('deposito');">Adicionar</a>
            </div>
        </div>


        <div class="block">

            {{ Form::label('', 'Recolhimento') }}

            <div class="recolhimentos">
                {{ Form::radio('recolhimentos', 1, false,['id'=> 'true3']) }}
                {{ Form::label('true3', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('recolhimentos', 2,['checked' => 'checked'],['id'=> 'false3']) }}
                {{ Form::label('false3', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="recolhimentos-component">
            <div class="block recolhimento">
                {{ Form::label('recolhimento', 'Motivo do Recolhimento') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_recolhimento">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="recolhimento" id="recolhimento">
                    @foreach($recolhimentos as $recolhimento)
                        <option title="{{$recolhimento['type']}}" value="{{$recolhimento['id']}}">{{$recolhimento['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block recolhimento">
                {{ Form::label('value_recolhimento', 'Valor do Recolhimento') }}
                {{ Form::number('value_recolhimento', '',["class" => "form-control"]) }}
            </div>

            <div class="block recolhimento">
                <a onclick="processo.add('recolhimento');">Adicionar</a>
            </div>
        </div>



        <div class="block">

            {{ Form::label('', 'Depósito Judicial') }}

            <div class="deposito_judicial">
                {{ Form::radio('deposito_judicial', 1, false,['id'=> 'true4']) }}
                {{ Form::label('true4', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('deposito_judicial', 2,['checked' => 'checked'],['id'=> 'false4']) }}
                {{ Form::label('false4', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="block">
            {{ Form::label('ocorrencia_inaugural', 'Ocorrência Inaugural') }}
            {{ Form::textarea('ocorrencia_inaugural', '',["class" => "form-control"]) }}
        </div>

        <div class="pedidos-component">
            <div class="block pedido">
                {{ Form::label('pedidos', 'Pedidos') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_pedido">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="pedido" id="pedido">
                    @foreach($pedidos as $pedido)
                        <option title="{{$pedido['type']}}" value="{{$pedido['id']}}">{{$pedido['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block pedido">
                <a onclick="processo.add('pedido');">Adicionar</a>
            </div>
        </div>

        {{ Form::submit('Enviar') }}
    {{ Form::close() }}

<div class="modal fade" id="modal_adv" tabindex="-1" role="dialog" aria-labelledby="modal_advModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_advModalLabel">Cadastrar Advogado</h4>
      </div>
      <div class="modal-body">
        @include('advocates.modal')

	    <script src="{{ asset('/js/advocates.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_client" tabindex="-1" role="dialog" aria-labelledby="modal_clientModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_clienteModalLabel">Cadastrar Cliente</h4>
      </div>
      <div class="modal-body">
        @include('clients.modal')

	    <script src="{{ asset('/js/clients.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_contrario" tabindex="-1" role="dialog" aria-labelledby="modal_contrarioModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_contrarioModalLabel">Cadastrar Parte Contrária</h4>
      </div>
      <div class="modal-body">
        @include('contrarios.modal')

	    <script src="{{ asset('/js/contrarios.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_pericia" tabindex="-1" role="dialog" aria-labelledby="modal_periciaModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_periciaModalLabel">Cadastrar Natureza de Perícia</h4>
      </div>
      <div class="modal-body">
        @include('pericias.modal')

	    <script src="{{ asset('/js/pericias.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_deposito" tabindex="-1" role="dialog" aria-labelledby="modal_depositoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_depositoModalLabel">Cadastrar Motivo do Depósito</h4>
      </div>
      <div class="modal-body">
        @include('depositos.modal')

	    <script src="{{ asset('/js/depositos.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_recolhimento" tabindex="-1" role="dialog" aria-labelledby="modal_recolhimentoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_recolhimentoModalLabel">Cadastrar Motivo do Recolhimento</h4>
      </div>
      <div class="modal-body">
        @include('recolhimentos.modal')

	    <script src="{{ asset('/js/recolhimentos.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_pedido" tabindex="-1" role="dialog" aria-labelledby="modal_pedidoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_pedidoModalLabel">Cadastrar Pedido</h4>
      </div>
      <div class="modal-body">
        @include('pedidos.modal')

	    <script src="{{ asset('/js/pedidos.js') }}"></script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection