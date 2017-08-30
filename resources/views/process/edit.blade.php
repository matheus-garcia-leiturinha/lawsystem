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

            <div class="cliente">
                <a class="add-new" onclick="processo.add('cliente');"><i class="fa fa-plus"></i></a>
            </div>

            @foreach($clientes_selected as $client_selected)
                <div class="child">
                    <input name="cliente_id[]" type="hidden" value="{{$client_selected['id']}}">
                    <div class="values">
                        <span>{{$client_selected['razao_social']}}</span>
                    </div>
                    <a onclick="processo.remove(this)">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="participantes-component">
            <div class="block participante">
                {{ Form::label('participante', 'Participante') }}
                {{ Form::text('participante', '',["class" => "form-control"]) }}
            </div>

            <div class="participante">
                <a class="add-new" onclick="processo.add('participante');"><i class="fa fa-plus"></i></a>
            </div>

            @foreach($parts as $part)
                <div class="child">
                    <input name="participante_name[]" type="hidden" value="{{$part}}">
                    <div class="values">
                        <span>{{$part}}</span>
                    </div>
                    <a onclick="processo.remove(this)">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="advogados-participantes-component">
            <div class="block adv_participante">
                {{ Form::label('advogado', 'Advogados Participantes') }}
                <a class="openADV create-new" data-toggle="modal" data-target="#modal_adv" data-id="participante">Criar novo</a>
                 <select class="selectpicker" data-live-search=true title=" " name="adv_participante" id="adv_participante">
                    @foreach($advogados_participantes as $adv)
                        <option title="{{$adv['nome']}}" value="{{$adv['id']}}">{{$adv['nome']}}</option>
                    @endforeach
                 </select>
            </div>

            <div class="advogado">
                <a class="add-new" onclick="processo.add('advogado_participante');"><i class="fa fa-plus"></i></a>
            </div>

            @foreach($advs_part_selected as $adv_part_selected)
                <div class="child">
                    <input name="adv_participante_id[]" type="hidden" value="{{$adv_part_selected['id']}}">
                    <div class="values">
                        <span>{{$adv_part_selected['nome']}}</span>
                    </div>
                    <a onclick="processo.remove(this)">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            @endforeach
            <div class="child">
            <input name="adv_participante_id[]" type="hidden" value="2">
            <div class="values"><span>Charity Emmerich</span></div>
            <a onclick="processo.remove(this)"><i class="fa fa-trash"></i></a>
            </div>
        </div>

        <div class="block">

            {{ Form::label('', 'Polo') }}

            <div class="polos">
                {{ Form::radio('polo', '1', $polo_ativo_selected,['id'=> 'ativo']) }}
                {{ Form::label('ativo', 'Ativo',['class'=> 'radio first','checked' => 'checked']) }}
                {{ Form::radio('polo', '2',$polo_passivo_selected,['id'=> 'passivo']) }}
                {{ Form::label('passivo', 'Passivo',['class'=> 'radio']) }}
            </div>

        </div>

        <div class="block">

            {{ Form::label('', 'Tipo do Processo') }}

            <div class="tipos">
                {{ Form::radio('tipo', '1', $administrativo_selected,['id'=> 'administrativo']) }}
                {{ Form::label('administrativo', 'Administrativo',['class'=> 'radio first column1','checked' => 'checked']) }}
                {{ Form::radio('tipo', '2',$civel_selected,['id'=> 'cível']) }}
                {{ Form::label('cível', 'Cível',['class'=> 'radio column1']) }}
            </div>

        </div>

        <div class="block">

            <div class="tipos">
                {{ Form::radio('tipo', '3',$criminal_selected,['id'=> 'criminal']) }}
                {{ Form::label('criminal', 'Criminal',['class'=> 'first radio']) }}
                {{ Form::radio('tipo', '4',$trabalhista_selected,['id'=> 'trabalhista']) }}
                {{ Form::label('trabalhista', 'Trabalhista',['class'=> 'radio']) }}
            </div>

        </div>

        <div class="block">

            <div class="tipos">
                {{ Form::radio('tipo', '5',$tributario_selected,['id'=> 'tributário']) }}
                {{ Form::label('tributário', 'Tributário',['class'=> 'first radio']) }}

            </div>

        </div>

        <div class="block">
            {{ Form::label('adv_responsavel', 'Quem abriu o processo?') }}

            <input type="hidden" name="adv_owner_selected" value="{{$advogado_selected['id']}}"/>
            <a class="openADV create-new" data-toggle="modal" data-target="#modal_adv" data-id="interno">Criar novo</a>
             <select class="selectpicker" data-live-search=true title=" " name="adv_responsavel" id="adv_responsavel">
                @foreach($advogados as $adv)
                    <option title="{{$adv['nome']}}" value="{{$adv['id']}}">{{$adv['nome']}}</option>
                @endforeach
             </select>

        </div>

        <div class="block">
            {{ Form::label('number', 'Número do processo') }}
            {{ Form::text('number', $number_selected,["class" => "form-control" ]) }}
        </div>

        <div class="block">
            {{ Form::label('adv_terceiro', 'Advogado contrário') }}


            <input type="hidden" name="adv_contr_selected" value="{{$advogado_contr_selected['id']}}"/>
            <a class="openADV create-new" data-toggle="modal" data-target="#modal_adv" data-id="contrario">Criar novo</a>
            <select class="selectpicker" data-live-search=true title=" " name="adv_terceiro" id="adv_terceiro">
                @foreach($advogados_contrario as $adv)
                    <option title="{{$adv['nome']}}" value="{{$adv['id']}}">{{$adv['nome']}}</option>
                @endforeach
            </select>
        </div>

        <div class="contrarios-component">
            <div class="block contrario">
                {{ Form::label('contrario', 'Parte contrária') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_contrario">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="contrario" id="contrario">
                    @foreach($contrarios as $contrario)
                        <option title="{{$contrario['nome']}}" value="{{$contrario['id']}}">{{$contrario['nome']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="contrario">
                <a class="add-new" onclick="processo.add('contrario');"><i class="fa fa-plus"></i></a>
            </div>

            @foreach($conts_selected as $cont_selected)
                <div class="child">
                    <input name="contrario_id[]" type="hidden" value="{{$cont_selected['id']}}">
                    <div class="values">
                        <span>{{$cont_selected['nome']}}</span>
                    </div>
                    <a onclick="processo.remove(this)">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            @endforeach
        </div>


        <div class="block">
            {{ Form::label('valor', 'Valor da causa') }}
            {{ Form::text('valor', $value_selected,["class" => "form-control"]) }}
        </div>

        <div class="block datepickerblock" id="date">
            {{ Form::label('data_ajuizamento', 'Data do Ajuizamento') }}
            {{ Form::text('data_ajuizamento', $date_ajuizamento_selected,["class" => "date form-control",'id' => 'datetimepicker']) }}
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

            {{ Form::radio('type_audiencia','una', ['checked' => 'checked'],['id'=> 'una']) }}
            {{ Form::label('una', 'Una',['class'=> 'radio first','checked' => 'checked']) }}
            {{ Form::radio('type_audiencia', 'inicial',false,['id'=> 'inicial']) }}
            {{ Form::label('inicial', 'Inicial',['class'=> 'radio']) }}
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
                {{ Form::text('value_pericia', '',["class" => "form-control"]) }}
            </div>

            <div class="pericia">
                <a class="add-new" onclick="processo.add('pericia');"><i class="fa fa-plus"></i></a>
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
                {{ Form::text('value_deposito', '',["class" => "form-control"]) }}
            </div>

            <div class="deposito">
                <a class="add-new" onclick="processo.add('deposito');"><i class="fa fa-plus"></i></a>
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
                {{ Form::text('value_recolhimento', '',["class" => "form-control"]) }}
            </div>

            <div class="recolhimento">
                <a class="add-new" onclick="processo.add('recolhimento');"><i class="fa fa-plus"></i></a>
            </div>
        </div>



        <div class="block">

            {{ Form::label('', 'Depósito Judicial') }}

            <div class="depositos_judiciais">
                {{ Form::radio('depositos_judiciais', 1, false,['id'=> 'true4']) }}
                {{ Form::label('true4', 'Sim',['class'=> 'radio first s0','checked' => 'checked']) }}
                {{ Form::radio('depositos_judiciais', 2,['checked' => 'checked'],['id'=> 'false4']) }}
                {{ Form::label('false4', 'Não',['class'=> 'radio s0']) }}
            </div>

        </div>

        <div class="deposito_judicial-component">
            <div class="block deposito_judicial">
                {{ Form::label('deposito_judicial', 'Motivo do deposito') }}
                <a class="create-new" data-toggle="modal" data-target="#modal_deposito_judicial">Criar novo</a>
                <select class="selectpicker" data-live-search=true title=" " name="deposito_judicial" id="deposito_judicial">
                    @foreach($depositos_judiciais as $deposito_judicial)
                        <option title="{{$deposito_judicial['type']}}" value="{{$deposito_judicial['id']}}">{{$deposito_judicial['type']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="block deposito_judicial">
                {{ Form::label('value_deposito_judicial', 'Valor do depósito Judicial') }}
                {{ Form::text('value_deposito_judicial', '',["class" => "form-control"]) }}
            </div>

            <div class="deposito_judicial">
                <a class="add-new" onclick="processo.add('deposito_judicial');"><i class="fa fa-plus"></i></a>
            </div>
        </div>

        <div class="block">
            {{ Form::label('ocorrencia_inaugural', 'Ocorrência Inaugural') }}
            {{ Form::textarea('ocorrencia_inaugural', $ocorrencia_selected,["class" => "form-control"]) }}
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

            <div class="block pedido hide">
                {{ Form::label('value_pedido', 'Valor do Pedido') }}
                {{ Form::text('value_pedido', '',["class" => "form-control"]) }}
            </div>

            <div class="pedido">
                <a class="add-new" onclick="processo.add('pedido');"><i class="fa fa-plus"></i></a>
            </div>
            @foreach($pedidos_selected as $pedido_selected)

            <div class="child">
                <input name="pedido_motivo[]" type="hidden" value="{{$pedido_selected['pedido_processo']['id']}}">
                <input name="pedido_valor[]" class="pedido_valor" type="hidden" value="{{$pedido_selected['pedido_processo']['pedido_valor']}}">
                <div class="values">
                    <span>quo</span>
                    <span>R$ {{number_format($pedido_selected['pedido_processo']['pedido_valor'],2,',','.')}}</span>
                    <select class="" data-live-search="true" title=" " name="pedido_risco[]" id="pedido_risco">
                        @if($pedido_selected['pedido_processo']['risco'] == "possivel")
                        <option title="possível" value="2" selected>Possível</option>
                        @else
                        <option title="possível" value="2">Possível</option>
                        @endif
                        @if($pedido_selected['pedido_processo']['risco'] == "provavel")
                        <option title="provavel" value="3" selected>Provável</option>
                        @else
                        <option title="provavel" value="3">Provável</option>
                        @endif
                        @if($pedido_selected['pedido_processo']['risco'] == "remoto")
                        <option title="remoto" value="4" selected>Remoto</option>
                        @else
                        <option title="remoto" value="4">Remoto</option>
                        @endif
                    </select>
                </div>
                <a onclick="processo.remove(this)">
                    <i class="fa fa-trash"></i>
                </a>
            </div>
            @endforeach
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

	    <script src="{{ asset('/js/clients.js') }}"></script>c
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

<div class="modal fade" id="modal_deposito_judicial" tabindex="-1" role="dialog" aria-labelledby="modal_deposito_judicialModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_deposito_judicialModalLabel">Cadastrar Motivo do Depósito</h4>
      </div>
      <div class="modal-body">
        @include('deposito_judicial.modal')

	    <script src="{{ asset('/js/deposito_judicial.js') }}"></script>
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