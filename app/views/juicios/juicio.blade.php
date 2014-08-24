@extends('master')
@section('titulo')
Datos del Juicio: {{ $juicio->partes }}
@stop
@section('breadcrumb')
<li><a href="{{ route('juicios.index') }}"><i class="fa fa-gavel"></i>Juicios</a></li>
<li><a class="active" href="#"><i class="fa fa-file"></i>Juicio</a></li>
@stop
@section('container')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Datos Juicio</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab">Tareas</a></li>
        <li class=""><a href="#tab_3" data-toggle="tab">Movimientos</a></li>
        <li class=""><a href="#tab_4" data-toggle="tab">Audiencias</a></li>
        <li class=""><a href="#tab_5" data-toggle="tab">Vtos</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            @include('juicios.contenido_tabs.datos_juicio')
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            @include('juicios.contenido_tabs.tareas')

        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
            @include('juicios.contenido_tabs.movimientos')
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
            @include('juicios.contenido_tabs.audiencias')
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="tab_5">

        </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
</div>
<input type="hidden" id="id_juicio" value="{{ $juicio->id }}">


@include('juicios.modals.tarea_form',["action"=>"Crear"])
@include('juicios.modals.audiencias_form',["action"=>"Crear"])
@include('juicios.modals.movimientos',["action"=>"Crear"])


@stop

@section('scripts')
{{ HTML::script('assets/js/tareas.js') }}
{{ HTML::script('assets/js/audiencias.js') }}
{{ HTML::script('assets/js/movimientos.js') }}
@stop