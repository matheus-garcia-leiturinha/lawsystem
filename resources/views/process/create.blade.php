
@extends('process.layout')

@section('title', 'Criar Processos')

@section('content')
    {{ Form::open(array('url' => 'processos/save',"class" => "processos")) }}


        <div class="block">
            {{ Form::label('cliente', 'Cliente') }}
            <a class="create-new" data-toggle="modal" data-target="#modal_client">Criar novo</a>
             <select class="selectpicker" data-live-search=true title=" " name="cliente" id="cliente">
                @foreach($clientes as $client)
                    <option title="{{$client['razao_social']}}" value="{{$client['id']}}">{{$client['razao_social']}}</option>
                @endforeach
             </select>
        </div>

        <div class="block">

            {{ Form::label('', 'Polo') }}

            <div class="polos">
                {{ Form::radio('polo', '1', ['checked' => 'checked'],['id'=> 'ativo']) }}
                {{ Form::label('ativo', 'Ativo',['class'=> 'radio first','checked' => 'checked']) }}
                {{ Form::radio('polo', '0',false,['id'=> 'passivo']) }}
                {{ Form::label('passivo', 'Passivo',['class'=> 'radio']) }}
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
            {{ Form::number('number', '',["class" => "form-control"]) }}
        </div>

        {{--<div class="block">--}}

            {{--{{ Form::label('', 'Natureza') }}--}}

            {{--<div class="naturezas">--}}
                {{--{{ Form::radio('natureza', 'civil', ['checked' => 'checked'],['id'=> 'civil']) }}--}}
                {{--{{ Form::label('civil', 'Cívil',['class'=> 'radio first','checked' => 'checked']) }}--}}
                {{--{{ Form::radio('natureza', 'criminal',false,['id'=> 'criminal']) }}--}}
                {{--{{ Form::label('criminal', 'Criminal',['class'=> 'radio']) }}--}}
            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="block">--}}
            {{--{{ Form::label('tribunal', 'Tribunal') }}--}}
             {{--<select class="selectpicker tribunal" data-live-search=true title=" " name="tribunal" id="tribunal">--}}
                {{--@foreach($tribunais as $tribunal)--}}
                    {{--<option title="{{$tribunal['nome']}}" value="{{$tribunal['id']}}">{{$tribunal['nome']}}</option>--}}
                {{--@endforeach--}}
             {{--</select>--}}
        {{--</div>--}}

        {{--<div class="block">--}}
            {{--{{ Form::label('vara', 'Vara') }}--}}
             {{--<select class="selectpicker" data-live-search=true title=" " name="vara" id="vara">--}}
                {{--@foreach($varas as $vara)--}}
                    {{--<option title="{{$vara['nome']}}" value="{{$vara['id']}}">{{$vara['nome']}}</option>--}}
                {{--@endforeach--}}
             {{--</select>--}}
        {{--</div>--}}

        <div class="block">
            {{ Form::label('adv_terceiro', 'Advogado contrário') }}
            <a class="create-new" data-toggle="modal" data-target="#modal_adv">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="adv_terceiro" id="adv_terceiro">
                @foreach($advogados as $adv)
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
                {{ Form::radio('audiencia', 0,['checked' => 'checked'],['id'=> 'false']) }}
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
                {{ Form::radio('pericias', 0,['checked' => 'checked'],['id'=> 'false1']) }}
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
                {{ Form::radio('depositos', 0,['checked' => 'checked'],['id'=> 'false2']) }}
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

            <div class="custos">
                {{ Form::radio('custos', 1, false,['id'=> 'true3']) }}
                {{ Form::label('true3', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('custos', 0,['checked' => 'checked'],['id'=> 'false3']) }}
                {{ Form::label('false3', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="custos-component">
            <div class="block custo">
                {{ Form::label('custo', 'Motivo do Recolhimento') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_custo">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="custo" id="custo">
                    @foreach($custos as $custo)
                        <option title="{{$custo['type']}}" value="{{$custo['id']}}">{{$custo['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block custo">
                {{ Form::label('value_custo', 'Valor do Recolhimento') }}
                {{ Form::number('value_custo', '',["class" => "form-control"]) }}
            </div>

            <div class="block custo">
                <a onclick="processo.add('custo');">Adicionar</a>
            </div>
        </div>



        <div class="block">

            {{ Form::label('', 'Depósito Judicial') }}

            <div class="deposito_judicial">
                {{ Form::radio('deposito_judicial', 1, false,['id'=> 'true4']) }}
                {{ Form::label('true4', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('deposito_judicial', 0,['checked' => 'checked'],['id'=> 'false4']) }}
                {{ Form::label('false4', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="block">
            {{ Form::label('ocorrencia_inaugural', 'Ocorrência Inaugural') }}
            {{ Form::textarea('ocorrencia_inaugural', '',["class" => "form-control"]) }}
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
@endsection