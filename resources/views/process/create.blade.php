
@extends('process.layout')

@section('title', 'Criar Processos')

@section('content')
    {{ Form::open(array('url' => 'processos/save')) }}


        {{ Form::label('number', 'Número Processual') }}
        {{ Form::number('number', '',["class" => "form-control"]) }}

        {{ Form::label('natureza', 'Natureza') }}
        {{ Form::number('natureza', '',["class" => "form-control"]) }}


        <div class="block">
            {{ Form::label('tribunal', 'Tribunal') }}
            {{ Form::select('tribunal', array_column($tribunais,"nome"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('vara', 'Vara') }}
            {{ Form::select('vara', array_column($varas,"nome"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('adv_responsavel', 'Advogado Responsável') }}
            {{ Form::select('adv_responsavel', array_column($advogados,"nome"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('adv_terceiro', 'Advogado Terceiro') }}
            {{ Form::select('adv_terceiro', array_column($advogados,"nome"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('contrario', 'Parte Contrária') }}
            {{ Form::select('contrario', array_column($contrarios,"nome"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('polo', 'Pólo') }}
            {{ Form::select('polo', ['Ativo','Passivo'],'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        <div class="block">
            {{ Form::label('pericia', 'Natureza da pericia') }}
            {{ Form::select('pericia', array_column($pericias,"type"),'',["class" => "selectpicker form-control","data-live-search" => true ]) }}
        </div>

        {{ Form::submit('Enviar') }}
    {{ Form::close() }}
@endsection