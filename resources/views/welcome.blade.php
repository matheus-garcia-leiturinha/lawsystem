@extends('layouts.app')

@section("content")
    <main class="content">
        <div class="title m-b-md">
        </div>

        <div class="block">
            <a href="{{ url('/processos/criar') }}" class="box">

                <i class="icon new"></i>
                <span>Novo Processo</span>
            </a>
            <a href="{{ url('/processos') }}" class="box">
                <i class="icon follow"></i>
                <span>Andamento de Processos</span>
            </a>
            <a href="{{ url('/reports') }}" class="box">
                <i class="icon report"></i>
                <span>Gerar Relatórios</span>
            </a>
        </div>
    </main>
@endsection
