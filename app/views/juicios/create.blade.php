@extends('master')
@section('titulo')
    Cargar Juicio
@stop
@section('breadcrumb')
<li><a href="#">Juicios</a></li>
<li class="active">Cargar Juicio</li>
@stop
@section('container')
<div id="msg_juicios"></div>
{{ Form::model(isset($juicios) ? $juicios: null ,$form_data, array('role' => 'form')) }}
<div class="form-group">
    {{ Form::label('partes', 'Partes') }}
    {{ Form::text( 'partes', null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
</div>

<div class="form-group">

    {{ Form::label('id_fuero', 'Fuero') }}<a href="#" data-toggle="modal" data-target="#fueroModal"> Agregar Fuero</a>
    {{ Form::select( 'id_fuero',$fuerosCombos,null ,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}

</div>
<div class="form-group">
    {{ Form::label('id_juzgado', 'Juzgado') }}<a href="#" data-toggle="modal" data-target="#juzgadoModal"> Agregar Juzgado</a>
    {{ Form::select( 'id_juzgado',$juzgadosCombos,null ,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
</div>
<div class="form-group">
    {{ Form::label('piso', 'Piso') }}
    {{ Form::text( 'piso',null ,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}

</div>


<div class="form-group">
    <label>Nro Expediente</label>
    <input type="text" class="form-control" name="nro_expediente" id="inptExpediente" placeholder="xxxx/yyyy" required="required">
</div>
<div class="form-group">
    {{ Form::label('id_dpto_judicial', 'Dpto Judicial') }}<a href="#" data-toggle="modal" data-target="#dptoJudicialModal"> Agregar Dpto Judicial</a>
    {{ Form::select( 'id_dpto_judicial',$deptosCombos,null ,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
</div>




<div class="form-group">
    {{ Form::label('id_etapa', 'Etapa') }}<a href="#" data-toggle="modal" data-target="#etapaModal"> Agregar Etapa</a>
    {{ Form::select( 'id_etapa',$etapasCombos,null ,array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}

</div>

<div class="form-group">
    {{ Form::label('carp', 'Carpeta') }}
    {{ Form::text( 'carp', null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
</div>
<div class="form-group">
    {{ Form::label('observaciones', 'Observaciones') }}
    {{ Form::textarea( 'observaciones', null, array('placeholder' => '', 'class' =>'form-control','required'=>'required')) }}
</div>
<div class="form-group">
    <button id="clear-completed"  class="btn btn-primary">
    Guardar »
    </button>
</div>

{{ Form::close() }}




<!-- Include de Ventanas Modales -->
@include('combos.fueros.modal', array('action'=>'Crear'))
@include('combos.juzgados.modal', array('action'=>'Crear'))
@include('combos.dptos_judiciales.modal', array('action'=>'Crear'))
@include('combos.etapas.modal', array('action'=>'Crear'))


@stop
@section('scripts')
{{ HTML::script('assets/js/combos/fueros.js') }}
{{ HTML::script('assets/js/combos/deptosJudiciales.js') }}
{{ HTML::script('assets/js/combos/juzgados.js') }}
{{ HTML::script('assets/js/combos/etapas.js') }}
{{ HTML::script('assets/js/juicios.js') }}

@stop